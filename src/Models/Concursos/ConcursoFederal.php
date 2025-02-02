<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Federal;

class ConcursoFederal extends ConcursoLoterico
{
    protected $table = Federal::DB_TABLE_RESULTADOS;
}
