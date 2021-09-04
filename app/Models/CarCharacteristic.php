<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCharacteristic extends Model
{
    use HasFactory;

    protected $fillable =[
        'car_id',
        'car_model',
        'car_year',
        'car_registration',
        'car_type',
        'car_fuel',
        'car_doors',
        'car_seats',
        'car_gearbox',
        'car_color',
        'car_description',
        'price_id',
        'price_by_hour',
    ];

    public function car(){
        return $this->belongsTo(Car::class);
        }
}
