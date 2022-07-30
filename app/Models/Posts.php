<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'location', 
        'description',
        'contact',
        'price_for_day',
        'price_for_servis',
        'rules',
        'comments_id',
        'reservation_id',
        'rating_id',
        'images_id', 
        'created_at', 
        'updated_at'
    ];
}
