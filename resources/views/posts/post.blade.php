<?php
    $img = [
        'https://images.unsplash.com/photo-1452423668729-43a98052d3ee?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d04419c2a462a30db5983305d8fb0fff&auto=format&fit=crop&w=500&q=60',
        'https://cdn.stocksnap.io/img-thumbs/960w/RBTN61GCJA.jpg',
        'https://images.unsplash.com/photo-1518226203301-8e7f833c6a94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=841c8eccb063d0b38e52adc64c2684ff&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb',
        'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=44fd85adc94d85353e27f5471352c087&auto=format&fit=crop&w=500&q=60'
    ]
?>

<!-- Title -->
<h1 class="mt-4" id="postTitle">
    <a href="/posts/{{$post->id}}">
        {{$post->title}}
    </a>
</h1>
<!-- Author -->
<p class="lead">
    by <a href="#">{{ $post->user->name }}</a>
</p>
<hr>
<!-- Date/Time -->
<p>Posted on <span class="text-muted">{{$post->created_at->toFormattedDateString()}}</span></p>
<hr>
<!-- Preview Image -->
<a href="/posts/{{$post->id}}">
    <img class="img-fluid rounded" src="{{$img[rand(0, 3)]}}" width="900" hiegh="900" alt="">
</a>