<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Driver;

class NationalityFilter extends Component
{
  public $selectedNationality;

  public function render()
  {
    return view('livewire.nationality-filter', ['nationalities' => $this->getNationalities()]);
  }

  public function updated($property)
  {
    if ($property === 'selectedNationality') {
      $this->dispatch('nationality-changed', nationality: $this->selectedNationality);
    }
  }

  protected function getNationalities(): array
  {
    $array = Driver::select('nationality')->get()->flatten()->toArray();

    foreach ($array as $a) {
      $nationalities[] = $a['nationality'];
    }

    $nationalities = array_unique($nationalities);

    sort($nationalities);

    return $nationalities;

  }

}
