<!-- Title -->
<h1 class="mt-4" id="postTitle">
    <a href="/posts/{{$post->id}}">
        {{$post->title}}
    </a>
</h1>
<!-- Author -->
<p class="lead">
    by <a href="#">Zeyad Etman</a>
</p>
<hr>
<!-- Date/Time -->
<p>Posted on <span class="text-muted">{{$post->created_at->toFormattedDateString()}}</span></p>
<hr>
<!-- Preview Image -->
<img class="img-fluid rounded" src="http://placehold.it/1600x900" alt="">