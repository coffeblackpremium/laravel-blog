<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $posts;
    
    public function render()
    {

        return view('livewire.blog.show-post');
    }

    public function create()
    {
        
    }

    public function mount()
    {
        $this->posts = Post::all();
    }
}
