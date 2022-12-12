<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {

        return view('livewire.blog.show-blog', ['posts' => Post::paginate(5)]);
    }

    public function mount()
    {
        //$this->posts = Post::all();
    }
}
