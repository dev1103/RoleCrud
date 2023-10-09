<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = \Illuminate\Support\Facades\File::get("database/data/cities.json");
        $data = json_decode($json);
        foreach ($data as $city) {
            City::updateOrCreate([
                'name' => $city->name,
                'state_id' => $city->state_id,
            ]);
        }
    }
}
