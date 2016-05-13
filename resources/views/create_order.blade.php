@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                
                <div class="panel-body">
                    Add Order for {{$name}}<br>
                    <ul>
                    @foreach($orders as $order)
                     
                        <li>{{ $order->name }}&nbsp;<a href="{{ url('/order/delete/'.$order->id.'/'.$order->customer_id) }}">Delete</a></li>
                    @endforeach
                    </li>
                      
                    <form method="POST">
                    
                        <select name="name">
                            <option value="Bag">Bag</option>
                            <option value="Cellphone">Cellphone</option>
                            <option value="Macbook">Macbook</option>
                        </select>
                        <input type="hidden" name="customer_id" value="{{ $id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Create">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    