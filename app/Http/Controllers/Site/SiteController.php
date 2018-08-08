<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Salon;
use App\User;
use App\Booking;
use App\TimeSheetStylist;
use App\Http\Requests\SiteFormRequest;
class SiteController extends Controller
{
    public function createBooking()
    {
        $salon = Salon::where('id','<>',1)->get();
        $timesheetstylist = TimeSheetStylist::all();
        $user = User::where('permission',2)->get();
        return view('sites.booking', ['salon' => $salon, 'timesheetstylist' => $timesheetstylist, 'user' => $user]);
    }

    public function storeBooking(Request $request)
    {
        $booking = new Booking;
        $booking = $booking->create([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'salon_id' => $request['salon'],
            'stylist_id' => $request['stylist_id'],
            'time_booking' => $request['timesheet'],
            'status' => trans('booking.status')
        ]);
        $booking->save();
    }
}
