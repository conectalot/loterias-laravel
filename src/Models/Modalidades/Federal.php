<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoFederal;

abstract class Federal
{
    public const SLUG = 'federal';
    public const DB_TABLE_RESULTADOS = 'resultados_federal';
    public const TITULO = "Federal";
    public const QTD_FAIXAS_PREMIACAO = 5;
    public const CLASS_CONCURSO = ConcursoFederal::class;
}
