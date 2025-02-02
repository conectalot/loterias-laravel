<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\SuperSete;

class ConcursoSuperSete extends ConcursoLoterico
{
    protected $table = SuperSete::DB_TABLE_RESULTADOS;
}
