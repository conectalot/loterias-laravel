<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoMegaSena;

abstract class MegaSena
{
    public const SLUG = 'megasena';
    public const DB_TABLE_RESULTADOS = 'resultados_megasena';
    public const TITULO = "Mega-Sena";
    public const QTD_FAIXAS_PREMIACAO = 3;
    public const CLASS_CONCURSO = ConcursoMegaSena::class;
}
