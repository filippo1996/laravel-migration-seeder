<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            $trip = new Trip();
            $trip->name = 'Relax ai caraibi';
            $trip->description = 'Rilassati sulla spiaggia più bella del mondo, benvenuto ai caraibi';
            $trip->path_img = 'https://www.viaggi-brevi.com/wp-content/uploads/2018/02/caraibi.jpg';
            $trip->category = 'Oasi del piacere';
            $trip->save();
        }
    }
}
