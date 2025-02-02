<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Quina;

class ConcursoQuina extends ConcursoLoterico
{
    protected $table = Quina::DB_TABLE_RESULTADOS;
}
