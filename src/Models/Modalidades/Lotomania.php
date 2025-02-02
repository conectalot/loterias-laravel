<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoLotomania;

abstract class Lotomania
{
    public const SLUG = 'lotomania';
    public const DB_TABLE_RESULTADOS = 'resultados_lotomania';
    public const TITULO = "Lotomania";
    public const QTD_FAIXAS_PREMIACAO = 7;
    public const CLASS_CONCURSO = ConcursoLotomania::class;
}
