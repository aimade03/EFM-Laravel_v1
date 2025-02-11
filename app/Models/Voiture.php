<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsToMany(Service::class,'utilisations')->withPivot(['dateDebutUtilisation','dateFinUtilisation']);
    }
}
