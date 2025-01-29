<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Driver;

class NationalityFilter extends Component
{
  public $selectedNationality;

  public function mount()
  {
  }

  public function render()
  {
    return view('livewire.nationality-filter', ['nationalities' => $this->getNationalities()]);
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
