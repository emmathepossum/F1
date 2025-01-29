<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Driver;

class DriverList extends Component
{
  use WithPagination;


  public function render()
  {
    return view('livewire.driver-list', [
      'drivers' => Driver::paginate(30)
    ]);
  }
}
