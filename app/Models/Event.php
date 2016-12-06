<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nom', 'description', 'date_de_debut', 'date_de_fin', 'lieu', 'tarif', 'organisateur'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}