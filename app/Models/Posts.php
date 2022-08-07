<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'created_at', 
        'updated_at',
        'user_id',
    ];


    public function scopeFilter($query, array $filters){
        if ($filters['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
                  ->orWhere('location', 'like', '%'.request('search').'%')
                  ->orWhere('price_for_day', 'like', '%'.request('search').'%');
        }
    }

    public function images(){
        return $this->hasMany(Images::class, 'post_id');
    }

    public function comments(){
        return $this->hasMany(Comments::class, 'post_id');
    }
}
