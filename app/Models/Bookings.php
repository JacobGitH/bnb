<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'booked'];

    /*
    public function scopeBetweenDates($query, array $filters){
        return $query()->whereDate('booked', '>=', $filters[0])->whereDate('booked', '<=', $filters[1]);
    }
    */
}
