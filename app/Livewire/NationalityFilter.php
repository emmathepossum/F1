<?php

namespace App\Livewire;

use Livewire\Component;

class NationalityFilter extends Component
{
  public $nationalities;

  public $selectedNationality;

  public function mount($nationalities = null)
  {
    $this->nationalities = $nationalities;
  }

  public function render()
  {
    return view('livewire.nationality-filter');
  }
}
