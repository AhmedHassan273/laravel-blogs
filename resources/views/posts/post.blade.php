<!-- Preview Image -->
<a href="/posts/{{$post->id}}">
    <img class="img-fluid rounded" src="uploads/{{$post->image}}" width="300" hieght="300" alt="{{$post->title}}">
</a>

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

<!-- Date/Time -->
<p>Posted on <span class="text-muted">{{$post->created_at->toFormattedDateString()}}</span></p>