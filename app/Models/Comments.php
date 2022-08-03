<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = ['user_name', 'user_id', 'post_id', 'comment'];

    public function post(){
        return $this->belongsTo(Posts::class, 'post_id');
    }
}
