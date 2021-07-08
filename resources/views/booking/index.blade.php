@extends('layouts.app')

@section('content')

<ul class='lisyt-group'>
    @foreach ($bookings as $booking)
        <li class="list-group-item list-group-item-action">Your booking will be for the <strong>{{ date('d / m / Y',strtotime($booking->booking_date)) }}</strong>
            at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong> for <strong>{{ $booking->seats_nbr }}</strong> persons.</li>
    @endforeach
</ul>

@endsection