<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //relacion uno a muchos inversa
    Public function user(){
        Return $this->belongsTo(User::class);
    }
    
    Public function category(){
        Return $this->belongsTo(Category::class);
    }
    //muchos a muchos
    
    Public function tags(){
        Return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    Public function image(){    
		Return $this->morphOne(image::class,'imageable');	
    }

    
}
