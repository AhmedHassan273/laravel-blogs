@extends('layouts.master')


@section('content')

<main role="main">
<br>
    @foreach($posts as $post)

        <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <!-- Post Content Column -->
                    <div class="col-lg-8">

                        @include('posts.post')
                        
                        @include('posts.comments')

                    </div>
                    
                    <div class="col-md-4 text-center" id="sideBar">
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div>
        </section>

    @endforeach

</main>

@endsection