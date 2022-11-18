<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $table = 'organisation';

    protected $fillable = [
        'legal_name',
        'description',
        'source',
        'inn',
        'location',
        'head_person_name',
    ];

    public function category()
    {
        return $this->belongstoMany(Category::class)->using(CategoryOrganisation::class);
    }

}
