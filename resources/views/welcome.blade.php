@extends('layouts.app')
@section('content')
        <div class="jumbotron">
            <div class="text-center display-4">
                {{$msg}}
            </div>
            
        </div>
        
            
            <div class="album py-5 bg-light">
                <div class="container">
                    
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      @foreach ($meals as $item)
                    <div class="col">
                      <div class="card shadow-sm">
                        <img src="{{$item->photo}}" alt="">
            
                        <div class="card-body">
                          <p class="card-text">{{$item->description}}</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">{{$item->price_sale}}</small>
                          </div>
                        </div>
                      </div>
                    </div>
                     @endforeach 
                  </div>
                 
                </div>
              </div>
      
@endsection
