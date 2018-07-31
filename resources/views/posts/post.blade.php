<!-- Title -->
<h1 class="mt-4" id="postTitle">
    <a href="/posts/{{$post->id}}">
        {{$post->title}}
    </a>
</h1>
<!-- Author -->
<p class="lead">
    by <a href="#">{{$post->user->name}}</a>
</p>
<hr>
<!-- Date/Time -->
<p>Posted on <span class="text-muted">{{$post->created_at->toFormattedDateString()}}</span></p>
<hr>
<!-- Preview Image -->
<a href="/posts/{{$post->id}}">
    <img class="img-fluid rounded" src="{{$post->image}}" width="900" hiegh="900" alt="Thumbnail">
</a>