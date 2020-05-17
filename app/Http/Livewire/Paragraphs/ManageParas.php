<?php

namespace App\Http\Livewire\Paragraphs;

use App\Page;
use App\Paragraph;
use Livewire\Component;

class ManageParas extends Component
{
    public $select;
    public $paras;

    public function render()
    {
        $this->paras = Paragraph::where('page_id', $this->select)->get();
        return view('livewire.paragraphs.manage-paras')
            ->withPagenames(Page::orderBy('name')->get());
    }

    public function fetchpara()
    {

    }
}
