<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;

    public function affiliations () {
        return $this->hasOne(Medecin::class);
    }

    public function departements () {
        return $this->hasOne(Medecin::class, 'chef_doctor_id');
    }

    public function qualifications() {
        return $this->hasOne(Medecin::class);
    }

    public function consultations () {
        return $this->hasOne(Medecin::class);
    }

    public function prescriptions () {
        return $this->hasOne(Medecin::class);
    }

    public function traitements () {
        return $this->hasOne(Medecin::class);
    }
}