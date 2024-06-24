<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catigore extends Model
{
    use HasFactory;

    public function Posts() {
        $this->hasMany(class:post);
    }
}
