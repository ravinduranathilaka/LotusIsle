<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_category');
    }
}