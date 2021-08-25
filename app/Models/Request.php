<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class);
        }
    public function car(){
            return $this->belongsTo(Car::class);
        }
    

}
