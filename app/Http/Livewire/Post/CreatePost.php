<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $image_path;

    protected $rules = [
        'title' => 'min:1|max:220|required',
        'slug' => 'required',
        'description' => 'required',
        'image_path' => 'nullable|image|max:1024',
    ];

    public function render()
    {
        return view('livewire.post.create-post');
    }

    public function savePostImage()
    {
        $nameFile = Str::slug($this->title) . '.' . $this->image_path->getClientOriginalExtension();
        $path = $this->image_path->store($nameFile, 'posts');
        return $path;
    }

    public function save()
    {
        $this->validate();        
        // $this->image_path->store('posts');

        // dd($this->savePostImage());

        auth()->user()->posts()->create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'image_path' => $this->savePostImage(),
        ]);
        
        return redirect()->to('posts.create');

    }
}
