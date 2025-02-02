<?php

namespace Conectalot\Loterias\Utils;

use Illuminate\Support\Collection;

class DezenasCollection extends Collection
{
    /**
     * Retorna as dezenas como uma string formatada
     */
    public function asString(): string
    {
        return implode(', ', $this->items);
    }

    /**
     * Permite conversão automática para string quando usada em um contexto de string
     */
    public function __toString(): string
    {
        return $this->asString();
    }
}
