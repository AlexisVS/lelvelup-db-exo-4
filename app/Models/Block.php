<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    public function oncalls () {
        return $this->hasOne(Oncall::class);
    }

    public function chambres () {
        return $this->hasOne(Chambre::class);
    }
}
