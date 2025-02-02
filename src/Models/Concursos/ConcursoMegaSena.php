<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\MegaSena;

class ConcursoMegaSena extends ConcursoLoterico
{
    protected $table = MegaSena::DB_TABLE_RESULTADOS;
}
