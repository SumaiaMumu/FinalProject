@extends('backend.master')

@section('title')
        Customer-single-view
@stop

@section('content')
<div class="col-8 offset-2">
        <div class="card ">
            <div class="card-header bg-info">
              <p class="text-light">Customer Single Info.</p>
            </div>
         
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $customer->name}}</td>
                    </tr>
                    <tr>
                        <th>Customer Email</th>
                        <td>{{ $customer->email}}</td>
                    </tr>
                    <tr>
                        <th>Customer Image</th>
                        <td><img width="100px;" src="{{url('/uploads/customers/'.$customer->image)}}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Customer Contact</th>
                        <td>{{ $customer->contact}}</td>
                    </tr>
                    <tr>
                        <th>Customer Addresss</th>
                        <td>{{ $customer->address}}</td>
                    </tr>
                    <tr>
                        <th>Customer DL Number</th>
                        <td>{{$customer->dl}}</td>
                    </tr>
                  


                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.customer.list')}}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

@stop