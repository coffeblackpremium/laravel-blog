<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\PostObserver;

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
}
