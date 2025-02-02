<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoQuina;

abstract class Quina
{
    public const SLUG = 'quina';
    public const DB_TABLE_RESULTADOS = 'resultados_quina';
    public const TITULO = "Quina";
    public const QTD_FAIXAS_PREMIACAO = 4;
    public const CLASS_CONCURSO = ConcursoQuina::class;
}
