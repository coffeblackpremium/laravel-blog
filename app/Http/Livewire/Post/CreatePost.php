<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $tema;
    public $description;
    public $body_content;
    public $image_path;

    protected $rules = [
        'title' => 'min:1|max:220|required',
        'tema' => 'required',
        'description' => 'min:1|max:255|required',
        'body_content' => 'required',
        'image_path' => 'nullable|image|max:5024',
    ];

    public function render()
    {
        return view('livewire.post.create-post');
    }

    public function savePostImage()
    {
        $titleForFile = Str::slug($this->title);
        $nameFile = Str::slug($this->title) . '.' . $this->image_path->getClientOriginalExtension();
        $path = $this->image_path->storeAs($titleForFile, $nameFile);
        return $path;
    }
    
    /**
     * Salva o Formulario do Usuario
     *
     * @return void
     */
    public function save()
    {
        $this->validate();        
        // $this->image_path->store('posts');

        // dd($this->savePostImage());

        auth()->user()->posts()->create([
            'title' => $this->title,
            'tema' => $this->tema,
            'description' => $this->description,
            'body_content' => $this->body_content,
            'image_path' => $this->savePostImage(),
        ]);
        
        return redirect()->to('posts.create');

    }
}
