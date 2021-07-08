@extends('layouts.app')

@section('content')

<ul>
    @foreach ($bookings as $item)
        <li> {{$item->id}} </li>
    @endforeach
</ul>

@endsection