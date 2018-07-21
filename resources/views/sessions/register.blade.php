@extends('layouts.master')


@section('content')

    <br>
    <div class="row">
        <div class="col-sm-12" id="signup_form">
            <form action="/register" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter username..">
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email..">
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter account password..">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Re-enter account password..">
                </div>
                
                <button type="submit" id="signup" name="signup" class="btn btn-primary btn-lg btn-block">Register</button>
            
                @include('layouts.errors')
            
            </form>
        </div>
    </div>
    <br>
        
@endsection