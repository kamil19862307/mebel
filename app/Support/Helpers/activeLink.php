<?php
/*
 * Функция для подсветки/выделения текушей ссылки/ссылок (активной, на которой сейчас находится пользователь)
 * Принимает два параметра (второй необязательный) - имя ссылки и стиль выделения активной ссылки.
 * Если вложенные ссылки (каталог->мебель->столы) то {{ active_link('active-link.settings*') }}
 * пишем у родительской ссылки. То-есть все маршруты которые начинаются с
 * active-link.settings будут подсвечиваться/выделяться
 */

use Illuminate\Support\Facades\Route;

if(! function_exists('active_link')) {
    function active_link(string|array $names, string $class = 'bg-white'): string|null
    {
        if (is_string($names)) $names = [$names];

        return Route::is($names) ? $class : null;
    }
}
