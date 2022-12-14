<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $table = 'organisations';

    protected $fillable = [
        'legal_name',
        'description',
        'source',
        'inn',
        'location',
        'head_person_name',
        'logo'
    ];

    public function categories()
    {
        return $this->belongstoMany(Category::class)->using(CategoryOrganisation::class);
    }

    public function root_comments()
    {
        return $this->hasMany(Comment::class, 'organisation_id', 'id')
            ->whereNull('parent_comment_id');
    }
    
    public function suggestion_comments()
    {
        return $this->hasMany(Comment::class, 'organisation_id', 'id')
            ->orderBy('rate', 'desc')
            ->with('media')
            ->has('media')
            ->limit(10);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
