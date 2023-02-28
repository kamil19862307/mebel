<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'admin_user_id',
    ];

    /*
     * Получить пользователя владеющего телефоном
     */
    public function adminUser()
    {
        return $this->belongsTo(AdminUser::class);
    }
}
