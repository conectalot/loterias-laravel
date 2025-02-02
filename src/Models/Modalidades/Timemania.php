<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoTimemania;

abstract class Timemania
{
    public const SLUG = 'timemania';
    public const DB_TABLE_RESULTADOS = 'resultados_timemania';
    public const TITULO = "Timemania";
    public const QTD_FAIXAS_PREMIACAO = 6;
    public const CLASS_CONCURSO = ConcursoTimemania::class;
}
