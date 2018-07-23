@extends('layouts.master')


@section('content')
<div class="col-lg-12">
    <!-- Title -->
    <h1 class="mt-4  text-center">
            {{$post->title}}
        </h1>
        <!-- Author -->
        <p class="lead">
            by <a href="#">{{ $post->user->name }}</a>
        <!-- Date/Time -->
        <small>
            Posted on <span class="text-muted">{{$post->created_at->toFormattedDateString()}}</span></p>
        </small>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/1600x900" alt="">
        <!-- Post Content -->
        <p class="lead">
            {{$post->body}}
        </p>
        <hr>
        <section id="commentSection" class="container rounded">
            
            @include('posts.comments')

        </section>
        <br>
</div>
@endsection