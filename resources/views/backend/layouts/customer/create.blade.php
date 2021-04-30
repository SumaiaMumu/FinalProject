@extends('backend.master')

@section('title')
        Customer-Create
@stop

@section('content')
       
            <div class="col-10 offset-1">
                <h3 class="text-center mb-4">Customer Create</h3>


    <form method="post" action="{{route('admin.customer.store')}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name"> Customer Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
       </div>

              <div class="form-group">
            <label for="address">Email</label>
            <input type="text" class="form-control"  id="email" name="email"  placeholder="Enter Email">
              </div>

       <div class="form-group">
            <label for="image"> Customer Image</label>
            <input type="file" class="form-control" id="image" name="image" >
       </div>

       <div class="form-group">
            <label for="contact">Contact</label>
            <input type="number" class="form-control"  id="contact" name="contact"  placeholder="Enter Number">
       </div>           

       <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control"  id="address" name="address"  placeholder="Enter Address">
       </div>

       <div class="form-group">
            <label for="dl">DL or Reference Number</label>
            <input type="text" class="form-control"  id="dl" name="dl"  placeholder="Enter DL or reference Number">
       </div>

                  
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
       
@stop

