<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoLoteca;

abstract class Loteca
{
    public const SLUG = 'loteca';
    public const DB_TABLE_RESULTADOS = 'resultados_loteca';
    public const TITULO = "Loteca";
    public const QTD_FAIXAS_PREMIACAO = 2;
    public const CLASS_CONCURSO = ConcursoLoteca::class;
}
