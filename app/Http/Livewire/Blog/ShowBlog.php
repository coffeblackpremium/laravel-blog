<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowBlog extends Component
{

    public $post;

    public function render()
    {

        return view('livewire.blog.show-blog', ['posts' => Post::latest()->paginate(5)]);
    }

    public function mount(Post $post)
    {
        $this->post = $post;
    }
}
