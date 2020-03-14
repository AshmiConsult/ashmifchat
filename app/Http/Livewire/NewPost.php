<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Post;

class NewPost extends Component
{
    public $title = '';

    public $body = '';


    public function addPost()
    {

        // Validation
        $this->validate([
            'title' => 'required|min:10',
            'body' => 'required|max:300',
        ]);

        // Create Post
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'body' => $this->body,
            'approved' => false
        ]);

        // Redirect
        $this->emit('new-post');

        $this->title = '';
        $this->body = '';
    }


    public function render()
    {
        return view('livewire.new-post');
    }
}
