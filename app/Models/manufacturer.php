<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manufacturer extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'description',
        'active'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
