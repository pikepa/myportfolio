<?php

namespace App\Http\Livewire\Pages;

use App\Page;
use livewire;
use Livewire\Component;
use Illuminate\Support\Str;

class Addpage extends Component
{
    public $name ='';
    public $slug = '';
    public $featured_img  = '';
    public $title = '';
    public $active = 0;
    public $pages;



    public function add()
    {
        $data = $this->validate([
            'name' => 'required | min:5| max:24 |unique:pages',
            'slug' => '',
            'title' => 'required | min:5| max:24',
            'featured_img' => '',
        ]);

        Page::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']."-".$data['title'], '-'),
            'title' => $data['title'],
            'featured_img' => $data['featured_img'],
            'active' => $this->active,
        ]);

        $this->reset();

    }

    public function render()
    {
        $this->pages = Page::all();
        return view('livewire.pages.addpage');
    }
}
