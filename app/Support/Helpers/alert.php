<?php
/*
 * Функция принимает два необязательных параметра - Сообщение и Цвет сообщения.
 * И передаёт это во флеш сессию. Нужна для результата действия.
 */
if(! function_exists('alert')) {
    function alert(string $message = 'Успешно', string $color = 'green'): void
    {
    session()->flash('alertMessage', $message);
    session()->flash('alertColor', $color);
    }
}
