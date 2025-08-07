<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use SoftDeletes;

    protected $fillables = [
        "title",
        "slug",
        "content",
        "category_id",
        "imagem"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}