<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Commentaire;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function comments(){
        return $this->hasMany(Commentaire::class);
    }
    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }
   
}
