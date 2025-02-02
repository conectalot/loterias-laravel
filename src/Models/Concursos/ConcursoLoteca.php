<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Loteca;

class ConcursoLoteca extends ConcursoLoterico
{
    protected $table = Loteca::DB_TABLE_RESULTADOS;
}
