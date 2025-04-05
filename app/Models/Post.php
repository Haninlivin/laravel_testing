<?php

namespace App\Models;

use App\Models\category;
use App\Mail\PostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['name', 'description'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    protected static function booted(): void
    {
        static::created(function (Post $post) {
            Mail::to('van@gmail.com')->send(new PostCreated($post));
        });
    }
}
