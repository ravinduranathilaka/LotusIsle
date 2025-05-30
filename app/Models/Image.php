<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['package_id', 'url', 'alt_text'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}