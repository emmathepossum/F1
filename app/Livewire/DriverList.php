<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Driver;
use Livewire\Attributes\On;

class DriverList extends Component
{
  use WithPagination;

  public $nationality;
  public $pageSize = 30;

  #[On('nationality-changed')]
  public function nationalityChanged($nationality)
  {
    $this->nationality = $nationality;
    $this->resetPage();
  }

  public function render()
  {
    if ($this->nationality) {
      $drivers = Driver::where('nationality', '=', $this->nationality)->paginate($this->pageSize);
    } else {
      $drivers = Driver::paginate($this->pageSize);
    }
    return view('livewire.driver-list', [
      'drivers' => $drivers
    ]);
  }
}
