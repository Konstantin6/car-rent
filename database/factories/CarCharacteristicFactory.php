<?php

namespace Database\Factories;

use App\Models\CarCharacteristic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Car;

class CarCharacteristicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarCharacteristic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
$faker->addProvider(new \Faker\Provider\Fakecar($faker));
        return [
            'car_id' =>Car::factory(),
            'car_model'=>$faker->vehicleModel,
            'car_year'=>$this->faker->year($max = 'now') ,
            'car_registration'=>$faker->vehicleRegistration,
            'car_type'=>$faker->vehicleType,
            'car_fuel'=>$faker->vehicleFuelType,
            'car_doors'=>$faker->vehicleDoorCount,
            'car_seats'=>$faker->vehicleSeatCount,
            'car_gearbox'=>$faker->vehicleGearBoxType,
            'car_color'=>$this->faker->rgbcolor,
            'car_description'=>$this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'price_id'=>$this->faker->randomDigit,
            'price_by_hour'=>$this->faker->numberBetween($min = 10, $max = 1000),
        ];
    }
    
    
    
   
    
   
    
}
