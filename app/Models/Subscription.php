<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;

class Subscription extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['email'];
}
