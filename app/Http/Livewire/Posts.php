<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Post;

class Posts extends Component
{



    public function mount()
    {
        $this->posts = auth()->user()->posts;
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
