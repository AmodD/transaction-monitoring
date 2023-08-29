<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public $period = 30;

    public function render()
    {
      return view('livewire.dashboard',[
        'periodSelectorText' => ($this->period) > 1 ? 'Last '.($this->period -1).' Days' : 'Today',
      ]);
    }
}
