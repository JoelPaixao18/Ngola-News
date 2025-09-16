<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\News;

class Comment extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'text_comment',
        'date',
        'news_id',
        'user_id',
        'parent_id',
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relação com respostas
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // Relação com o comentário pai
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('d/m/Y');
    }

    /*  public function getAuthorInitialsAttribute()
    {
        $names = explode(' ', $this->author_comment);
        $initials = '';
        foreach ($names as $name) {
            $initials .= strtoupper($name[0]);
        }
        return $initials;
    } */
}
