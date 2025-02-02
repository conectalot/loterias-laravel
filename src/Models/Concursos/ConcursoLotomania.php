<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Lotomania;

class ConcursoLotomania extends ConcursoLoterico
{
    protected $table = Lotomania::DB_TABLE_RESULTADOS;
}
