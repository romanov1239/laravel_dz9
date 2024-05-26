<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title', 'slug', 'body', 'hidden'];
    protected $hidden = [];
    protected array $dates = [];
    protected $casts = [
        'hidden' => 'boolean',
    ];

}
