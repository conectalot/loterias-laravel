<?php

namespace Conectalot\Loterias\Providers;

use Conectalot\Loterias\Enums\ModalidadeLoterica;
use Conectalot\Loterias\Services\LoteriasService;
use Illuminate\Support\ServiceProvider;

class LoteriasServiceProvider extends ServiceProvider
{
    public function register()
    {
        foreach (ModalidadeLoterica::cases() as $modalidade) {
            $this->app->bind($modalidade->value, function () use ($modalidade) {
                return new LoteriasService(modalidade: $modalidade);
            });
        }
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/conectalot.php' => config_path('conectalot.php'),
        ], 'config');
    }

    public function provides()
    {
        return ModalidadeLoterica::slugs();
    }
}
