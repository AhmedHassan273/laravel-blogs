@extends('layouts.master')


@section('content')

<main role="main">
<br>
    @foreach($posts as $post)

        <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <!-- Post Content Column -->
                    <div class="col-lg-12">

                        @include('posts.post')

                    </div>
                </div>
            </div>
        </section>

    @endforeach

</main>

@endsection