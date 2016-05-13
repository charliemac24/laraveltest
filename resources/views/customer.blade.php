@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    Manage Customers<br>
                    <a href="{{ url('/customer/create') }}" >Create</a>

                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td><a href="{{ url('/customer/edit/'.$customer->id) }}">Edit</a>| <a href="{{ url('/customer/delete/'.$customer->id) }}">Delete</a>| <a href="{{ url('/order/add_order/'.$customer->id) }}">Create Order</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    