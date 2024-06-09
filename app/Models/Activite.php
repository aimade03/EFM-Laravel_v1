<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    /**
     * The roles that belong to the Activite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function eleves()
    {
        return $this->belongsToMany(Club::class,'activite_eleve');
    }
    
}
