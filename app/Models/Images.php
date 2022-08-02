<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['id','path', 'post_id', 'created_at', 'updated_at'];

    public function posts(){
        return $this->belongsTo(Posts::class, 'post_id');
    }

}
