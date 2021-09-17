<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lumiere extends Component
{
    public $luminance = 50;

    public function toZero(){
        $this->luminance = 0 ;
    }

    public function decrement(){
        if ($this->luminance > 0){
            $this->luminance -= 10 ;
        }
    }

    public function increment(){
        if ($this->luminance < 100){
            $this->luminance += 10 ;
        }
    }

    public function toMax(){
        $this->luminance = 100 ;
    }




    public function render()
    {
        return view('livewire.lumiere');
    }
}
