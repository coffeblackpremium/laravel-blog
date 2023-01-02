<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $post;
    public $title;
    public $slug;
    public $image_path;
    public $description;


    protected $rules = [
        'title' => 'min:1|max:220|required',
        'slug' => 'min:1|max:220required',
        'image_path' => 'nullable|image|max:1000',
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.post.create-post');
    }

    public function mount() { }

    public function save()
    {
        $validation = $this->validate();

        $this->image_path->store('posts');

        Post::create([
            'user_id' => 1,
            'title' => $this->title,
            'slug' => $this->slug,
            'image_path' => $this->image_path,
            'description' => $this->description
        ]);
    }
}
