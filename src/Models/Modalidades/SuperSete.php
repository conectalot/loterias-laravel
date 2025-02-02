<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoSuperSete;

abstract class SuperSete
{
    public const SLUG = 'supersete';
    public const DB_TABLE_RESULTADOS = 'resultados_supersete';
    public const TITULO = "Super Sete";
    public const QTD_FAIXAS_PREMIACAO = 5;
    public const CLASS_CONCURSO = ConcursoSuperSete::class;
}
