<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoDiaDeSorte;

abstract class DiaDeSorte
{
    public const SLUG = 'diadesorte';
    public const DB_TABLE_RESULTADOS = 'resultados_diadesorte';
    public const TITULO = "Dia de Sorte";
    public const QTD_FAIXAS_PREMIACAO = 5;
    public const CLASS_CONCURSO = ConcursoDiaDeSorte::class;
}
