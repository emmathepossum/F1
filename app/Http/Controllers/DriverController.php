<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\View\View;

class DriverController extends Controller
{
  public function all(): View
  {
    return view('f1', data: [
      'drivers' => Driver::paginate(30)
    ]);
  }
}
