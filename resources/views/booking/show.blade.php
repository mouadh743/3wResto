@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">Booking date</th>
              <th scope="col">Booking time</th>
              <th scope="col">Number of seats</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> {{ $booking->booking_date->format('d/m/Y') }}</td>
              <td> {{ date('H:i', strtotime($booking->booking_time)) }}</td>
              <td> {{ $booking->seats_nbr }}</td>
              <td>
                  <a href="" class="btn btn-outline-warning">Edit</a>
                  <a href="" class="btn btn-outline-danger">Delete</a>

              </td>
            </tr>
        </tbody>
    </table>
@endsection