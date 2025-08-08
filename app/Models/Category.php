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
        'slug',
        'description',
        'type',
        'status',
    ];
<<<<<<< HEAD

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
=======
>>>>>>> e46ef9d9cedfc4c8774516ad303db8de1f958586
}
