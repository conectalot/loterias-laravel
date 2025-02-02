<?php

namespace Conectalot\Loterias\Traits;

use Conectalot\Loterias\Casts\Dezenas;
use Illuminate\Database\Eloquent\Model;
use Conectalot\Loterias\Utils\DezenasCollection;

trait TemDezenas
{
    /**
     * Adiciona os casts ao Model que usar esta Trait.
     */
    public static function bootTemDezenas()
    {
        static::retrieved(function (Model $model) {
            $model->mergeCasts([
                'dezenas_sorteadas1' => Dezenas::class,
                'dezenas_sorteadas2' => Dezenas::class,
                'dezenas_sorteadas' => Dezenas::class,
            ]);
        });
    }

    /**
     * Retorna as dezenas sorteadas em um formato unificado.
     */
    public function getDezenasAttribute()
    {
        if (count($this->dezenas_sorteadas1) > 0 && count($this->dezenas_sorteadas2) > 0) {
            return new DezenasCollection([
                $this->dezenas_sorteadas1,
                $this->dezenas_sorteadas2,
            ]);
        }

        return new DezenasCollection($this->dezenas_sorteadas);
    }
}
