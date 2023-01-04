<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\PostObserver;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tema',
        'body_content',
        'image_path',
        'user_id',
    ];

    protected $observers = [
        Post::class => [PostObserver::class],
    ];

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageAttribute()
    {
        if(Str::contains($this->image_path, "http")){
            return $this->image_path;
        }
        return url("storage/{$this->image_path}");
    }
}
