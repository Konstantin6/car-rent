<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{


    use HasFactory;

    protected $fillable =[
        'car_name',
        
    ];
    public function requests(){
        return $this->hasMany(Request::class);
}
public function owners(){
    return $this->belongsToMany(Owner::class);
    }
    public function car_characteristic(){
        return $this->hasOne(CarCharacteristic::class);
        }
    
}