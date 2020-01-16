@extends('adminLTE')
@section('content')
<div class="container">
<h2>Add a customer</h2>
 
    <form method="post" action="/customers" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control @error('name') is-invalid  @enderror" id="name" placeholder=" Name">
            </div>
            
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label ">Address</label>
            <div class="col-sm-9">
                <input name="address" type="text" class="form-control @error('address') is-invalid  @enderror" id="address"
                       placeholder="Adresse">
            </div>
            
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
            <div class="col-sm-9">
                <input name="phone" type="text" class="form-control @error('phone') is-invalid  @enderror" id="phone"
                       placeholder="Phone">
            </div>
           
        </div>
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input name="email" type="email" class="form-control @error('email') is-invalid  @enderror" id="email"
                       placeholder="Email">
            </div>
           
        </div>
        
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection