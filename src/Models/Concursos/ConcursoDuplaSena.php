<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\DuplaSena;

class ConcursoDuplaSena extends ConcursoLoterico
{
    protected $table = DuplaSena::DB_TABLE_RESULTADOS;
}
