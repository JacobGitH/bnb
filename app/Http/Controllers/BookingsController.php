<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Posts;
use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function store(Request $request, Posts $post){
        $form = $request->validate([
            'booked_at' => 'required',
            'booked_to' => 'required',
        ]);

        $booked_at = Carbon::createFromFormat('Y-m-d', $request->booked_at);
        $booked_to = Carbon::createFromFormat('Y-m-d', $request->booked_to);

        $diff = (array) date_diff($booked_at, $booked_to);

        //betweenDates is scopefilter in bookings model **not working for some reason
        //$booked = Bookings::betweenDates([$booked_at, $booked_to])->get();
        $booked = Bookings::query()->whereDate('booked', '>=', $booked_at)->whereDate('booked', '<=', $booked_to)->get();
        
        //checks if dates are not already booked
        if(!$booked->isEmpty()){
            return redirect('/')->with('message', 'already booked');
        }

        for ($i=0; $i <= $diff['days']; $i++) { 
            Bookings::create([
                'post_id' => $post->id,
                'user_id' => auth()->user()->id,
                'booked' => date('Y-m-d', strtotime($request->booked_at . ' + ' . $i . ' days')),
            ]);
        }

        return redirect('/');
    }
}
