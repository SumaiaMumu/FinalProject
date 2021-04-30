@extends('backend.master')

@section('title')
    Bike-Create
@stop

@section('content')


      <div class="col-10 offset-1">
                <h3 class="text-center mb-4">Bike Create</h3>


  <form method="post" action="{{route('admin.bike.store')}}" enctype="multipart/form-data">
                @csrf

  <div class="form-group">
    <label for="image">Bike Image</label>
    <input type="file" class="form-control" id="image" name="image">
    
  </div>


  <div class="form-group">
    <label for="brand">Brand</label>
    <input type="text" class="form-control @error('brand') is-invalid @enderror " id="brand" name="brand"  placeholder="Enter Brand" value="{{old('brand')}}">
    @error('brand') <span class="text-danger"> {{$message}} </span> @enderror
  </div>


  <div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control @error('model') is-invalid @enderror"  id="model" name="model" placeholder="Enter Model" value="{{old('model')}}">
    @error('model') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="year">Year</label>
    <input type="number" class="form-control  @error('year') is-invalid @enderror" id="year" name="year" placeholder="Enter Year" value="{{old('year')}}">
    @error('year') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="color">Color</label>
    <input type="text" class="form-control  @error('color') is-invalid @enderror" id="color" name="color" placeholder="Enter Color" value="{{old('color')}}">
    @error('color') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="cc">CC</label>
    <input type="number" class="form-control  @error('cc') is-invalid @enderror" id="cc" name="cc" placeholder="Enter CC" value="{{old('cc')}}">
    @error('cc') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="power">Power</label>
    <input type="number" class="form-control  @error('power') is-invalid @enderror" id="power" name="power" placeholder="Enter Power" value="{{old('power')}}">
    @error('power') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="torque">Torque</label>
    <input type="number" class="form-control  @error('torque') is-invalid @enderror" id="torque" name="torque" placeholder="Enter Torque" value="{{old('torque')}}">
    @error('torque') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="odo">Odo</label>
    <input type="number" class="form-control  @error('odo') is-invalid @enderror" id="odo" name="odo" placeholder="Enter Odo" value="{{old('odo')}}">
    @error('odo') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="number">Number</label>
    <input type="text" class="form-control  @error('number') is-invalid @enderror" id="number" name="number" placeholder="Enter Number" value="{{old('number')}}">
    @error('number') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter Description" value="{{old('description')}}">
    @error('description') <span class="text-danger"> {{$message}} </span> @enderror
  </div>

  <div class="form-group">
    <label for="rent_per_hour">Rent per Hour</label>
    <input type="number" class="form-control  @error('rent per hour') is-invalid @enderror" id="rent_per_hour" name="rent_per_hour" placeholder="Enter Rent " value="{{old('rent per hour')}}">
    @error('rent per hour') <span class="text-danger"> {{$message}} </span> @enderror
  </div>


 


  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
     


@stop