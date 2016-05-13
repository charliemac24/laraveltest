@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Customers</div>

                <div class="panel-body">
                    Create Customer<br>
                    

                        @if(is_object($msg))
                            @foreach($msg->all() as $err)
                                {{$err}}
                            @endforeach
                        @endif
                      
                    <form method="POST">
                    Customer Name:<input type="text" name="name"><br />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="Create">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    