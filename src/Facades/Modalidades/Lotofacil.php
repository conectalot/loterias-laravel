<?php

namespace Conectalot\Loterias\Facades\Modalidades;

use Illuminate\Support\Facades\Facade;

class Lotofacil extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'lotofacil';
    }
}
