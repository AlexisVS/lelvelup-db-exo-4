<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;

    public function affiliations()
    {
        return $this->hasOne(Affiliation::class);
    }

    public function qualifications()
    {
        return $this->hasOne(Qualification::class);
    }

    public function consultations()
    {
        return $this->hasOne(Consultation::class);
    }

    public function prescriptions()
    {
        return $this->hasOne(Prescription::class);
    }

    public function traitements()
    {
        return $this->hasOne(Traitement::class);
    }
}
