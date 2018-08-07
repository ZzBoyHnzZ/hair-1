<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Salon;
use App\User;
use App\Booking;
use App\Http\Requests\SiteFormRequest;
class SiteController extends Controller
{
    public function createBooking()
    {
        $salon = Salon::all();

        return view('sites.booking', ['salon' => $salon]);
    }

    public function storeBooking(Request $request)
    {
        $booking = new Booking;
        $booking = $booking->create([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'salon_id' => $request['salon']
        ]);
        $booking->save();
    }
}
