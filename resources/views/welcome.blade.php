@extends('layouts.app')
@section('content')
        <div class="jumbotron">
            <div class="text-center display-4">
                {{$msg}}
            </div>
            
        </div>
        <table class="table table-bordered">
                <thead>

                </thead>
                <tbody>
                    @foreach ($meals as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price_sale}}</td>
                        <td><img src="{{$item->photo}}" alt=""></td>
                    </tr>
                    @endforeach    
                </tbody>
            </table>
@endsection
