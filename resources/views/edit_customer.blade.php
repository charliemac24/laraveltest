@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    Edit Customer<br>
                    

                      
                    <form method="POST" action="/customer/edit/{{$id}}">
                    Customer Name:<input type="text" name="name" value="{{$name}}"><br />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="submit" value="Update">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    