<?php

if(! function_exists('alert')) {
    function alert(string $message = 'Успешно', string $color = 'green'): void
    {
    session()->flash('alertMessage', $message);
    session()->flash('alertColor', $color);
    }
}
