<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RepeaterForm extends Component
{
    public $images;

    public function mount()
    {
        $this->images =   [1];
    }
    public function addImage()
    {
        $this->images[] =   [1];
    }
    public function removeImage($index)
    {
        unset($this->images[$index]);
        array_values($this->images);
    }
    public function render()
    {
        return view('livewire.repeater-form');
    }
}
