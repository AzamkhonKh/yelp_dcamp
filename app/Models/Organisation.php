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
    ];

    public function categories()
    {
        return $this->belongstoMany(Category::class)->using(CategoryOrganisation::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
