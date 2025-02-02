<?php

namespace Conectalot\Loterias\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Conectalot\Loterias\Utils\DezenasCollection;

class Dezenas implements CastsAttributes
{
    /**
     * Converte a string JSON do banco para um objeto Dezenas
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return new DezenasCollection(json_decode($value, true) ?? []);
    }

    /**
     * Converte o objeto Dezenas de volta para JSON no banco
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return json_encode($value instanceof DezenasCollection ? $value->toArray() : $value);
    }
}
