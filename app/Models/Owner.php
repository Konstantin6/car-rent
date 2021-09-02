<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable =[

        'owner_name',
         'owner_phone',
         'owner_adress',
         ];


    public function cars(){
        return $this->belongsToMany(Car::class);
        }
}
