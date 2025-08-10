<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    use SoftDeletes;

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    protected $fillable = [        
        'name',
        'biografia',
        'foto'
    ];
}
