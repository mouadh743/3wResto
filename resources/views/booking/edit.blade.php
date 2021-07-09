@extends('layouts.app')

@section('content')
<fieldset>
    <legend>New Booking</legend>
    <form action=" {{ route('booking.update',$booking->id) }} " method="post">
        @csrf
        @method('PATCH')
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="booking_date">Booking Date</label>
                    <input type="date" name="booking_date"  id="booking_date" class="form-control @error('booking_date') {{'is-invalid'}} @enderror"  value="{{ $booking->booking_date->format('Y-m-d')}}"  placeholder="  " >
                    @error('booking_date')
                        <div class="text-danger"> {{$message}} </div>    
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="booking_time">Booking time</label>
                  <input type="time" name="booking_time" id="booking_time" value="{{$booking->booking_time }}" class="form-control @error('booking_time') {{'is-invalid'}} @enderror" placeholder="" >
                  @error('booking_time')
                        <div class="text-danger"> {{$message}} </div>    
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="seats_nbr">Number of seats</label>
                    <input type="number" name="seats_nbr" min="1" max="20" id="seats_nbr" value="{{$booking->seats_nbr}}"             class="form-control @error('seats_nbr') {{'is-invalid'}} " value=" {{$booking->seats_nbr}} " @enderror"         placeholder="" >
                    @error('seats_nbr')
                        <div class="text-danger"> {{$message}} </div>    
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-outline-primary btn-block">Book now !</button>
        </div>
    </form>
</fieldset>
@endsection-