<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'image'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /* funções dos gates */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isEditor()
    {
        return in_array($this->role, ['admin', 'editor']);
    }

    public function isJornalista()
    {
        return in_array($this->role, ['admin', 'editor', 'jornalista']);
    }
}
