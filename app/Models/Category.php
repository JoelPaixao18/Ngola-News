<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\News;
use App\Models\Event;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    protected $fillable = [
        'name',
        'description',
        'type',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    /* protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
<<<<<<< HEAD
    } */
=======
    }
>>>>>>> ee5caa2316e01bc1a0d65614a4acd7310780f4c1
}
