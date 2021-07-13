@extends('layouts.admin')

@section('admin-content')
<fieldset>
    <legend>New Meal</legend>
    <form action="{{ route('meals.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') {{'is-invalid'}} @enderror" placeholder="" >
                    @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" value="{{ old('photo') }}" class="form-control @error('photo') {{'is-invalid'}} @enderror" placeholder="" >
                    @error('photo')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') {{'is-invalid'}} @enderror" placeholder="" >{{ old('description') }}</textarea>
            @error('description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="quantity_in_stock">Quantity in stock</label>
                  <input type="number" name="quantity_in_stock" min="1" id="quantity_in_stock" value="{{ old('quantity_in_stock') }}" class="form-control @error('quantity_in_stock') {{'is-invalid'}} @enderror" placeholder="" >
                  @error('quantity_in_stock')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="price_buy">Buy price</label>
                  <input type="number" name="price_buy" min="0" id="price_buy" value="{{ old('price_buy') }}" class="form-control @error('price_buy') {{'is-invalid'}} @enderror" placeholder="" >
                  @error('price_buy')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="price_sale">Sell price</label>
                  <input type="number" name="price_sale" min="0" id="price_sale" value="{{ old('price_sale') }}" class="form-control @error('price_sale') {{'is-invalid'}} @enderror" placeholder="" >
                  @error('price_sale')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-outline-success btn-block">Save</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-outline-warning btn-block">Cancel</button>
            </div>
        </div>
    </form>
</fieldset>
@endsection