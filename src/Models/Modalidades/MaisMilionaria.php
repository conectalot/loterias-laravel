<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoMaisMilionaria;

abstract class MaisMilionaria
{
    public const SLUG = 'maismilionaria';
    public const DB_TABLE_RESULTADOS = 'resultados_maismilionaria';
    public const TITULO = "+Milionária";
    public const QTD_FAIXAS_PREMIACAO = 10;
    public const CLASS_CONCURSO = ConcursoMaisMilionaria::class;
}
