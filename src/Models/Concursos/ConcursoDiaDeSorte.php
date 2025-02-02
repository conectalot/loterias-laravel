<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\DiaDeSorte;

class ConcursoDiaDeSorte extends ConcursoLoterico
{
    protected $table = DiaDeSorte::DB_TABLE_RESULTADOS;
}
