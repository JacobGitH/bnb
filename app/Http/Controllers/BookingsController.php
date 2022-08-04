<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function store(Request $request){
        $form = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'booked_at' => 'required',
            'booked_to' => 'required',
        ]);

        $booked_at = date_create_from_format('Y-m-d', $request->booked_at);
        $booked_to = date_create_from_format('Y-m-d', $request->booked_to);

        $diff = (array) date_diff($booked_at, $booked_to);

        for ($i=0; $i <= $diff['days']; $i++) { 
            Bookings::create([
                'post_id' => $request->post_id,
                'user_id' => $request->user_id,
                'booked' => date('Y-m-d', strtotime($request->booked_at . ' + ' . $i . ' days')),
            ]);
        }

        return redirect('/');
    }
}
