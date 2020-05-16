<?php

namespace App\Http\Livewire\Pages;

use App\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ManagePages extends Component
{

    public $name, $slug, $featured_img, $title, $pages, $thisid, $currentuser;
    public $updateMode = false;
    public $active = 0;
    public $activity = 'S';


    public function render()
    {

        $this->pages = Page::all();
        return view('livewire.pages.manage-pages');
    }


    public function add()
    {
        $data = $this->validate([
            'name' => 'required | min:5| max:24 |unique:pages',
            'title' => 'required | min:5| max:24',
            'featured_img' => '',
        ]);

        Page::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name'] . "-" . $data['title'], '-'),
            'title' => $data['title'],
            'featured_img' => $data['featured_img'],
            'active' => $this->active,
        ]);

        $this->reset('name','title','active');
    }

    public function edit($id)
    {
        $editpage = Page::find($id);

        $this->thisid = $editpage->id;
        $this->name = $editpage->name;
        $this->title = $editpage->title;
        $this->featured_img = $editpage->featured_img;
        $this->active = $editpage->active;


        $this->updateMode = 'true';
    }


    public function update()
    {
        $data = $this->validate([
            'name' => 'required | min:5| max:24',
            'title' => 'required | min:5| max:24',
            'featured_img' => '',
            'active' => '',
        ]);

        $updated = Page::find($this->thisid);

        $updated->name = $data['name'];
        $updated->slug = Str::slug($data['name'] . "-" . $data['title'], '-');
        $updated->title = $data['title'];
        $updated->featured_img = $data['featured_img'];
        $updated->active = $data['active'];

        $updated->save();
        $this->activity = "S";
        $this->reset('name', 'title', 'active');
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Page::where('id', $id);
            $record->delete();
        }
    }

}
