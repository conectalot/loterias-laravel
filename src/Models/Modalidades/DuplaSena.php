<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoDuplaSena;

abstract class DuplaSena
{
    public const SLUG = 'duplasena';
    public const DB_TABLE_RESULTADOS = 'resultados_duplasena';
    public const TITULO = "Dupla Sena";
    public const QTD_FAIXAS_PREMIACAO = 8;
    public const CLASS_CONCURSO = ConcursoDuplaSena::class;
}
