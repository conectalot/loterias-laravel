<?php

namespace Conectalot\Loterias\Models;

use Carbon\Carbon;
use Conectalot\Loterias\Traits\TemDezenas;
use Illuminate\Database\Eloquent\Model;
use Conectalot\Loterias\Traits\SmartBuilder;

abstract class ConcursoLoterico extends Model
{
    use TemDezenas, SmartBuilder;

    protected $casts = [
        'acumulado' => 'boolean',
        'data_apuracao' => 'date',
        'data_proximo_concurso' => 'date',
        'municipios_ganhadores' => 'array',
    ];

    public static function get($num_concurso): ConcursoLoterico
    {
        return self::find($num_concurso);
    }

    public static function ultimo(): ConcursoLoterico
    {
        return self::orderBy('id', 'desc')->first();
    }

    protected static function boot()
    {
        parent::boot();

        // Define a conexão de banco de dados dinamicamente
        static::retrieved(function ($model) {
            $model->setConnection(config('conectalot.conectalot_db_conection'));
        });
    }
}
