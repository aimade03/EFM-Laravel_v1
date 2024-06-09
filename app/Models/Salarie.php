<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model
{
    use HasFactory;
        public function service()
        {
            return $this->belongsTo(Service::class);
        }
        public function voiture()
        {
            return $this->belongsToMany(Voiture::class,"utilisations")->withPivot(['dateDebutUtilisation','dateFinUtilisation']);
        }
}
