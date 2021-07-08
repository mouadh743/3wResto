@extends('layouts.app')

@section('content')
<a type="button" class="btn btn-primary" href="{{ route('booking.create') }}">Get booking</a>
<div class="row">
<div class="col">
    <h2>Upcoming bookings</h2>
<ul class="list-group">
    @foreach ($comingBookings as $booking)
    <li class="list-group-item list-group-item-action">
        Your booking will be for the <strong>{{ $booking->booking_date->format('l, F jS Y') }}</strong>
        at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong> for <strong>{{ $booking->seats_nbr }}</strong>
        <span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
        <button>supprimer</button><button>editer</button>
    </li>
    @endforeach
</ul>
</div>
<div class="col">
    <h2>Old bookings</h2>
<ul class="list-group">
    @foreach ($passedBookings as $booking)
    <li class="list-group-item list-group-item-action">
        Your booking will be for the <strong>{{ date('d / m / Y',strtotime($booking->booking_date)) }}</strong>
        at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong> for <strong>{{ $booking->seats_nbr }}</strong><span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
    </li>
    @endforeach
</ul>
</div>
</div>
@endsection