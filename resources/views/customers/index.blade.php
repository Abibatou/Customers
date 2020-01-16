@extends('adminLTE')

@section('content')
<div class="container">
	<h4>Customer</h4>
	<a href="/create"><button class="btn btn-primary" type="submit" >Add Customer</button></a>
    <table class="table table-striped">
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>Name</th>
    			<th>Address</th>
    			<th>Phone</th>
    			<th>Email</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	@foreach($customers as $customer)
    	<tbody>
    		<tr>
    			<td>{{  $customer->id  }}</td>
    			<td>{{  $customer->name  }}</td>
    			<td>{{  $customer->address  }}</td>
    			<td>{{  $customer->phone  }}</td>
    			<td>{{  $customer->email  }}</td>
    			<form action="{{  route('customers.edit', $customer->id)  }}" method="GET">

                    
    			<td><button class="fa fa-edit btn-primary"></button></td>
    			</form>
    			<form action="{{  route('customers.delete', $customer->id)  }}" method="POST">
    				@csrf
                    @method('DELETE')
    			<td><button class="fa fa-times btn-danger"></button></td>
    		</tr>
    	</tbody>
    	@endforeach
    </table>
</div>
@endsection
