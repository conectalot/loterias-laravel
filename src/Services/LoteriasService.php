<?php

namespace Conectalot\Loterias\Services;

use Conectalot\Loterias\Enums\ModalidadeLoterica;
use Conectalot\Loterias\Models\Concursos\ConcursoMegaSena;

class LoteriasService
{
    protected ModalidadeLoterica $modalidade;

    public function __construct(ModalidadeLoterica $modalidade = null)
    {
        $this->modalidade = $modalidade;
    }

    public function concurso($num_concurso = null)
    {
        $concursoClass = $this->modalidade->getConcursoClass();

        return $concursoClass::find($num_concurso);
    }
}
