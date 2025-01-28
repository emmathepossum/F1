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
    $limit = 100; // seems to be the current API limit
    $offset = 0;
    $total = 1; // arbitrary init value

    while ($offset <= $total) {
      $response = Http::get("https://ergast.com/api/f1/drivers.json?limit=$limit&offset=$offset");
      if ($response->successful()) {
        $data = $response->json();
        $total = $data['MRData']['total'];
        $drivers = $data['MRData']['DriverTable']['Drivers'];
        // considered doing a single collected call, but with such a small data size it seems unnecessary
        foreach ($drivers as $driver) {
          Driver::create($driver);
        }
        $offset += $limit;
      }
    }
  }
}
