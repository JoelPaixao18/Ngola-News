<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Author;

class Event extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     public function author()
    {
        return $this->belongsTo(author::class);
    }

    protected $guarded = [];
    protected $fillable = [
        'title',
        'subtitle',
        'author',
        'image',
        'description',
        'country',
        'state',
        'city',
        'status',
        'eventDate',
        'lastModifyedDate',
        'categoryId',
        'authorId'
    ];
}
