<?php

namespace App\Models;

use App\Http\Controllers\UserpanelController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'category',
        'content',
        'year',
        'image1',
        'image2',
        'image3',
        'image4',
    ];
}
