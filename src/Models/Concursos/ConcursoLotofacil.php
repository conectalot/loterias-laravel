<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Lotofacil;

class ConcursoLotofacil extends ConcursoLoterico
{
    protected $table = Lotofacil::DB_TABLE_RESULTADOS;
}
