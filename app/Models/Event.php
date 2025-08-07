<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Event extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'description',
        'country',
        'state',
        'city',
        'status',
        'eventDate',
        'lastModifyedDate',
        'categoryId',
    ];
}
