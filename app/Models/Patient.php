<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function hospitalisations () {
        return $this->hasOne(Patient::class);
    }

    public function consultations () {
        return $this->hasOne(Patient::class);
    }
    
    public function prescriptions () {
        return $this->hasOne(Patient::class);
    }
    
    public function traitements () {
        return $this->hasOne(Patient::class);
    }
}
