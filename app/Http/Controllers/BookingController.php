<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        return view('booking.index',[
            'comingBookings'=>Auth::user()->bookings()->comingBookings()->get(),
            'passedBookings'=>Auth::user()->bookings()->passedBookings()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
        return view('booking.create',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'booking_date' => 'required|date',
            'booking_time' => 'required',
            'seats_nbr' => 'required|min:1|max:15',
        ]);
        $booking = new Booking;
        $booking->booking_date =$request->booking_date;
        
        $booking->user_id = Auth::id();

        $booking->booking_time =$request->booking_time;


        $booking->seats_nbr = $request->seats_nbr;


        $booking->created_at = now();
        

        $booking->updated_at = now();
        $booking->save();

        Mail::to(Auth::user()->email)->send(new BookingMail());
       return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('booking.show',[
            'booking'=>  $booking,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit',[
            'booking'=>  $booking,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    { $ValidatedDate = $request->validate([
        'booking_date' => 'required|date',
        'booking_time' => 'required',
        'seats_nbr' => 'required|min:1|max:15',
    ]);
        $booking->update($ValidatedDate );

        

        return redirect()->route('booking.index',[
            'booking'=>$booking,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('booking.index')->with('bookingNotification','Booking deleted successfully !');
    }
}
