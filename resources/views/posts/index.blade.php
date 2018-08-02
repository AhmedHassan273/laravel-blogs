@extends('layouts.master')


@section('content')

<main role="main">
<br>
    @foreach($posts as $post)
        <div class="posts">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-12">

                    @include('posts.post')

                </div>
            </div>
        </div>
    @endforeach
</main>

@endsection