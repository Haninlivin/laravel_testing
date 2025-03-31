<?php

namespace App\Models;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['name', 'description'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
