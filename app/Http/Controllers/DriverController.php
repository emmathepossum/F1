<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\View\View;
use Illuminate\Support\Arr;

class DriverController extends Controller
{
  public function all(): View
  {
    return view('f1', data: [
      'drivers' => Driver::paginate(30),
      'nationalities' => $this->getNationalities()
    ]);
  }

  protected function getNationalities(): array
  {
    $array = Driver::select('nationality')->get()->flatten()->toArray();

    foreach ($array as $a) {
      $nationalities[] = $a['nationality'];
    }

    return array_unique($nationalities);
  }
}
