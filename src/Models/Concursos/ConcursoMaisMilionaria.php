<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\MaisMilionaria;

class ConcursoMaisMilionaria extends ConcursoLoterico
{
    protected $table = MaisMilionaria::DB_TABLE_RESULTADOS;
}
