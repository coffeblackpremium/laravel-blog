<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        return view('livewire.blog.show-blog');
    }
    public function create()
    {
        return view('livewire.blog.create-posts');
    }
}
