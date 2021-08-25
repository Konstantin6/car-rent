<?php

namespace App\Http\Controllers;

use App\Models\manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function create(){
        $manufacturer = new manufacturer();
        $manufacturer->name='Test';

        $manufacturer = new Manufacturer();
$manufacturer->name = 'Test';
$manufacturer->description = 'Test description';
$manufacturer->active = true;
$manufacturer->save();

$manufacturer = Manufacturer::create([
    'name' => 'Test create',
    'description' => 'Test create description',
    'active' => false,
]);
dd($manufacturer);
    }
}
