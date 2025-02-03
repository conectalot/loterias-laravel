<?php

namespace Conectalot\Loterias\Traits;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait SmartBuilder
{
    public static function smartBuilder()
    {
        return new class(self::query()) {
            private $query;
            private $executado = false;

            public function __construct($query)
            {
                $this->query = $query;
            }

            public function __call($method, $args)
            {
                $this->executado = true;
                return $this->query->$method(...$args);
            }

            public function get()
            {
                return $this->query->get();
            }

            public function all()
            {
                return $this->query->get();
            }

            public function from($dateOrConcurso)
            {
                return match (true) {
                    is_string($dateOrConcurso) => $this->fromDate($dateOrConcurso),
                    is_int($dateOrConcurso) => $this->fromConcurso($dateOrConcurso),
                    $dateOrConcurso instanceof \Carbon\Carbon => $this->fromDate($dateOrConcurso),
                    $dateOrConcurso instanceof ConcursoLoterico => $this->fromConcurso($dateOrConcurso),
                    default => throw new InvalidArgumentException("Tipo inválido passado para 'from()'"),
                };
            }

            public function to($dateOrConcurso)
            {
                return match (true) {
                    is_string($dateOrConcurso) => $this->toDate($dateOrConcurso),
                    is_int($dateOrConcurso) => $this->toConcurso($dateOrConcurso),
                    $dateOrConcurso instanceof Carbon => $this->toDate($dateOrConcurso),
                    $dateOrConcurso instanceof ConcursoLoterico => $this->toConcurso($dateOrConcurso),
                    default => throw new InvalidArgumentException("Tipo inválido passado para 'to()'"),
                };
            }

            public function fromConcurso(ConcursoLoterico|int $num_concurso)
            {
                if($num_concurso instanceof ConcursoLoterico){
                    $num_concurso = $num_concurso->id;
                }

                $this->query->where('id', '>=', $num_concurso);
                return $this;
            }

            public function toConcurso(ConcursoLoterico|int $num_concurso)
            {
                if($num_concurso instanceof ConcursoLoterico){
                    $num_concurso = $num_concurso->id;
                }

                $this->query->where('id', '<=', $num_concurso);
                return $this;
            }

            public function fromDate(Carbon|string $date)
            {
                if(!($date instanceof Carbon)){
                    $date = Carbon::createFromFormat('Y-m-d', $date);
                }

                $this->query->where('data_apuracao', '>=', $date->format('Y-m-d'));
                return $this;
            }

            public function toDate(Carbon|string $date)
            {
                if(!($date instanceof Carbon)){
                    $date = Carbon::createFromFormat('Y-m-d', $date);
                }

                $this->query->where('data_apuracao', '<=', $date->format('Y-m-d'));
                return $this;
            }

            public function __toString()
            {
                return json_encode($this->query->get());
            }

            public function __destruct()
            {
                if (!$this->executado) {
                    $this->query = $this->query->get();
                }
            }
        };
    }
}
