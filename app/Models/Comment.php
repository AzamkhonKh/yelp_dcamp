<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'username',
        'text',
        'rate',
        'organisation_id',
        'user_id',
        'parent_comment_id',
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
