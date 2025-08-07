<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'event_date',
        'last_modifyed_date',
        'category_id',
    ];
}
