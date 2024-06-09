<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the Eleve
     *
     
     */
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
    /**
     * The roles that belong to the Eleve
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function activites()
    {
        return $this->belongsToMany(Activite::class, 'activite_eleve');
    }
}
