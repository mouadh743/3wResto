@extends('layouts.admin')

@section('admin-content')
    <a href="{{ route('meals.create') }}" class="btn btn-outline-primary float-right" role="button" aria-pressed="true"
        ><span data-feather="plus-circle"></span> Add new meal</a>
    <h2>Meals list</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>name</th>
              <th>Quantity in Stock</th>
              <th>Buy price</th>
              <th>Sell Price</th>
              <th>Operations</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($meals as $meal)
                <tr>
                    <th>{{ $meal->id }}</th>
                    <td>{{ $meal->name }}</td>
                    <td>{{ $meal->quantity_in_stock }}</td>
                    <td>{{ $meal->price_buy }}</td>
                    <td>{{ $meal->price_sale }}</td>
                    <td>
                    <a href="{{ route('meals.show', $meal->id) }}" class="btn btn-outline-primary"><span data-feather="eye"></span></a>
                        <a href="#" class="btn btn-outline-warning"><span data-feather="edit"></span></a>
                        <a href="#" class="btn btn-outline-danger"><span data-feather="trash-2"></span></a>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection