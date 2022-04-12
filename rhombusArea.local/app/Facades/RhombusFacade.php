<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class RhombusFacade extends Facade
{
    /**
     * Геттер для зарегистрированного имени компонента
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Rhombus';
    }
}
