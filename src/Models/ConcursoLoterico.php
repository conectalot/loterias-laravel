<?php

namespace Conectalot\Loterias\Models;

use Conectalot\Loterias\Traits\TemDezenas;
use Illuminate\Database\Eloquent\Model;

abstract class ConcursoLoterico extends Model
{
    use TemDezenas;

    protected $casts = [
        'acumulado' => 'boolean',
        'data_apuracao' => 'date',
        'data_proximo_concurso' => 'date',
        'municipios_ganhadores' => 'array',
    ];

    public static function get($num_concurso): ConcursoLoterico
    {
        return Self::find($num_concurso);
    }

    public static function ultimo(): ConcursoLoterico
    {
        return Self::orderBy('id', 'desc')->first();
    }
}
