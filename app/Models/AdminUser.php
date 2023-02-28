<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];

    /*
     * Получить телефон связанный с пользователем
     */

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
