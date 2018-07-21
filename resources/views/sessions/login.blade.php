@extends('layouts.master')


@section('content')

    <br>
    <div class="row">
        <div class="col-sm-12" id="signup_form">
            <form action="/login" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email..">
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password..">
                </div>

                <button type="submit" id="signin" name="signin" class="btn btn-primary btn-lg btn-block">Log In</button>
            
                @include('layouts.errors')
            
            </form>
        </div>
    </div>
    <br>
        
@endsection