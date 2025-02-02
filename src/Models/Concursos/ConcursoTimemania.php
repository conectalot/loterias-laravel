<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Timemania;

class ConcursoTimemania extends ConcursoLoterico
{
    protected $table = Timemania::DB_TABLE_RESULTADOS;
}
