<?php

namespace Conectalot\Loterias\Facades\Modalidades;

use Illuminate\Support\Facades\Facade;

class Federal extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'federal';
    }
}
