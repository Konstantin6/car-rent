<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected  $fillable= ['title', 'body','description'];

    public function rubric(){
        return $this->belongsTo(Rubric::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
