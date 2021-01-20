<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function articles(){
        return $this->belongsToMany(Tag::class);
    }
    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }
    public function comments(){
        return $this->belongsToMany(Commentaire::class);
    }
    
}
