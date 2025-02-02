<?php

namespace Conectalot\Loterias\Models\Modalidades;

use Conectalot\Loterias\Models\Concursos\ConcursoLotofacil;

abstract class Lotofacil
{
    public const SLUG = 'lotofacil';
    public const DB_TABLE_RESULTADOS = 'resultados_lotofacil';
    public const TITULO = "Lotofácil";
    public const QTD_FAIXAS_PREMIACAO = 5;
    public const CLASS_CONCURSO = ConcursoLotofacil::class;
}
