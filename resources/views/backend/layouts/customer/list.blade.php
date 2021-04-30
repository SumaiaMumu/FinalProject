@extends('backend.master')

@section('title')
        Customer-list
@stop

@section('content')
<div class="row">
    <div class="col-10 offset-1">
        <h3 class="text-center mb-2">Customer List</h3>
<!-- Success Msg-->
        @if(session('success'))
        <div class="text-center alert alert-success">
                <p class="text-center text-bolder">{{ session('success') }}</p>
        </div>

        @endif

        <a href="{{route('admin.customer.create')}}" class="btn btn-secondary mb-3">Create New</a>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col">Email</th>
      <th scope="col">Customer Image</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">DL Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $key=>$d)
    <tr>
      <th scope="row">  {{$key+1}}</th>
      <td>  {{$d->name}}</td>
      <td> {{$d->email}}</td>
      <td><img width="100px;" src="{{url('/uploads/customers/'.$d->image)}}" alt=""></td>
      <td> {{$d->contact}}</td>
      <td> {{$d->address}}</td>
      <td> {{$d->dl}}</td>
      <td class="d-flex">
          <a class="btn btn-primary mx-1" href="{{route('admin.customer.show',$d->id)}}"> View</a>

          <a class="btn btn-success mx-1" href=""> Edit</a>
          <form action="{{ route('admin.customer.delete',$d->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1 delete">Delete</button>

          </form>
      
      </td>
    </tr>
@endforeach
  </tbody>
</table>
    </div>


</div>



@stop