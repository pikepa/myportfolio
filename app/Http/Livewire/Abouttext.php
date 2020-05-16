<?php

namespace App\Http\Livewire;

use App\Paragraph;
use Livewire\Component;

class Abouttext extends Component
{
    public $paras = [];
    public $page=1;
 

    public function render()
    {
        $this->paras = Paragraph::get();

        return view('livewire.Abouttext');
    }
}
