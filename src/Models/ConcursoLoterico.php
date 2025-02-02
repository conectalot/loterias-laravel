<?php

namespace Conectalot\Loterias\Models;

use Illuminate\Database\Eloquent\Model;
use Conectalot\Loterias\Utils\DezenasCollection;

abstract class ConcursoLoterico extends Model
{
    protected $casts = [
        'dezenas_sorteadas1' => \Conectalot\Loterias\Casts\Dezenas::class,
        'dezenas_sorteadas2' => \Conectalot\Loterias\Casts\Dezenas::class,
        'dezenas_sorteadas' => \Conectalot\Loterias\Casts\Dezenas::class,
    ];

    public function getDezenasAttribute(): DezenasCollection
    {
        if($this->dezenas_sorteadas1) {
            return new DezenasCollection([$this->dezenas_sorteadas1, $this->dezenas_sorteadas2]);
        }

        return new DezenasCollection($this->dezenas_sorteadas);
    }

    public static function get($num_concurso): ConcursoLoterico
    {
        return Self::find($num_concurso);
    }

    public static function ultimo(): ConcursoLoterico
    {
        return Self::orderBy('id', 'desc')->first();
    }
}
