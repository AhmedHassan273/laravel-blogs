@extends('layouts.master')

@section('content')
<div class="row">
    <!-- Post Content Column -->
    <div class="col-lg-12">
        <hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="your post's title">
            </div>
            
            <div class="form-group">
                <label for="body">Write your post here</label>
                <textarea class="form-control" name="body" id="body" rows="3" placeholder="write something here.."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Publish</button>
        
        </form>
        <hr>
    </div>
</div>

@endsection