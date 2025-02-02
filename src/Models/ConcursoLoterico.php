<?php

namespace Conectalot\Loterias\Models;

use Illuminate\Database\Eloquent\Model;

abstract class ConcursoLoterico extends Model
{
    public static function get($num_concurso)
    {
        return Self::find($num_concurso);
    }

    public static function ultimo(): Self
    {
        return Self::orderBy('id', 'desc')->first();
    }
}
