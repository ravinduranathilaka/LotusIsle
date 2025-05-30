<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Fillable or guarded
    protected $fillable = ['name', 'email', 'password', 'role'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function createdPackages()
    {
        return $this->hasMany(Package::class, 'created_by');
    }
}