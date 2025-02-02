<?php

namespace Conectalot\Loterias\Facades\Modalidades;

use Illuminate\Support\Facades\Facade;

class DiaDeSorte extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'diadesorte';
    }
}
