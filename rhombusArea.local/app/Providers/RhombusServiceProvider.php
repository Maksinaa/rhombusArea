<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RhombusServiceProvider extends ServiceProvider
{
        /**
     * Регистрация сервисов приложения
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Rhombus', 'App\Services\Rhombus');
    }
}

