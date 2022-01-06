<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public function hospitalisations () {
        return $this->hasOne(hospitalisations::class);
    }

    public function consultations () {
        return $this->hasOne(Consultation::class);
    }
    
    public function prescriptions () {
        return $this->hasOne(Prescription::class);
    }
    
    public function traitements () {
        return $this->hasOne(Traitement::class);
    }
}
