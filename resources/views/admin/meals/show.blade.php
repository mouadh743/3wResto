@extends('layouts.admin')

@section('admin-content')

<div class="card" style="width: 38rem;">
    <img class="card-img-top" src="{{ asset('storage/'.$meal->photo) }}" alt="{{ $meal->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $meal->name }}</h5>
            <p class="card-text">
                <ul>
                    <li>
                        <strong>Description: </strong>{{ $meal->description }}
                    </li>
                    <li>
                        <strong>Quantity in stock: </strong>{{ $meal->quantity_in_stock }}
                    </li>
                    <li>
                        <strong>Buy price: </strong>{{ $meal->price_buy }}
                    </li>
                    <li>
                        <strong>Sell price: </strong>{{ $meal->price_sale }}
                    </li>
                </ul>

            </p>
          <a href="#" class="btn btn-outline-primary">Edit</a>
          <a href="#" class="btn btn-outline-danger">Delete</a>
        </div>
      </div>
      @endsection