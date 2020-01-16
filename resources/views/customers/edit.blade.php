@extends('adminLTE')
@section('content')
<div class="container">
<h2>Edit a customer</h2>
 
    <form action="{{  route('customers.update', $customer->id)  }}" enctype="multipart/form-data"  method="POST">
        @csrf
         @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control" id="name" value="{{ $customer->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <input name="address" type="text" class="form-control" id="address"
                       value="{{ $customer->address}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-9">
                <input name="phone" type="text" class="form-control" id="phone"
                       value="{{ $customer->phone}}">
            </div>
        </div>
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input name="email" type="email" class="form-control" id="email"
                       value="{{ $customer->email}}">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection