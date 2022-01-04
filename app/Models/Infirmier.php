<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmier extends Model
{
    use HasFactory;

    public function consultations () {
        return $this->hasOne(Infirmier::class);
    }
        
    public function traitements () {
        return $this->hasOne(Infirmier::class);
    }

    public function oncalls () {
        return $this->hasOne(Infirmier::class);
    }
}
