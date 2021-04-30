@extends('backend.master')

@section('title')
      Bike-list
@stop



@section('content')

<div class="row">
      <div class="col-12 offset">
            <h3 class="text-center mb-2">Bike List</h3>
<!--Success msg-->
            @if(session('success'))
            <div class="text-center alert alert-success">
                <p class="text-center text-bolder">{{session('success')}}</p>
            
            </div>

            @endif
            
          <a href="{{route('admin.bike.create')}}" class="btn btn-secondary mb-3">Create New</a>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Bike Image</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Color</th>
      <th scope="col">Cc</th>
      <th scope="col"> BHP</th>
      <th scope="col">Torque(NM)</th>
      <th scope="col">Odo</th>
      <th scope="col">Number</th>
      <th scope="col">Description</th>
      <th scope="col">Rent Per Hour</th>
      <th class="text-center" scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>

  @foreach($data as $key=>$e)
    <tr>
      <th scope="row">  {{$key+1}}</th>
      <td><img width="100px;" src="{{url('/uploads/bikes/'.$e->image)}}" alt=""></td>
      <td>{{$e->brand}}</td>
      <td>{{$e->model}}</td>
      <td>{{$e->year}}</td>
      <td>{{$e->color}}</td>
      <td>{{$e->cc}}</td>
      <td>{{$e->power}}</td>
      <td>{{$e->torque}}</td>
      <td>{{$e->odo}}</td>
      <td>{{$e->number}}</td>
      <td>{{$e->description}}</td>
      <td>{{$e->rent_per_hour}}</td>
     
      <td class="d-flex">
          <a class="btn btn-primary mx-1" href="{{route('admin.bike.show',$e->id)}}"> View</a>
          <a class="btn btn-success mx-1" href=""> Edit</a>
          <form action="{{ route('admin.bike.delete',$e->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1 delete">Delete</button>

          </form>
      
      </td>
    </tr>
    
    
    @endforeach

    
   
  </tbody>
</table>
  {{$data->links()}}
      
      </div>






</div>

@stop