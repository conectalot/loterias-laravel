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

    public function concursos()
    {
        return $this->modalidade->getConcursoClass()::smartBuilder();
    }

    public function concurso($num_concurso)
    {
        return $this->modalidade->getConcursoClass()::get($num_concurso);
    }

    public function ultimoConcurso()
    {
        return $this->modalidade->getConcursoClass()::ultimo();
    }
}
