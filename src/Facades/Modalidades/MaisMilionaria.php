<?php

namespace Conectalot\Loterias\Facades\Modalidades;

use Illuminate\Support\Facades\Facade;

class MaisMilionaria extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'maismilionaria';
    }
}
