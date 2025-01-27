<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // get drivers via api
    // save into db
    // 
    // limit 30 ?limit=100 max
    // total 861

    $response = Http::get('https://ergast.com/api/f1/drivers.json');
    if ($response->ok()) {
      $data = json_decode($response->body(), true);
      // $data['MRData']['total'];
      $drivers = $data['MRData']['DriverTable']['Drivers'];
      foreach ($drivers as $driver) {
        var_dump($driver);
        Driver::firstOrCreate($driver);
      }

    }
  }
}
