<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    protected $listeners = ['new-post' => '$refresh'];

    use WithPagination;


    public $perPage = 6;

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => \App\Post::latest()->paginate($this->perPage)
        ]);
    }

    public function deletePost($id)
    {
        \App\Post::find($id)->delete();
    }
}
