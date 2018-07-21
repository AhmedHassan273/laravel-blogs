<!-- Comments Form -->
<div class="card my-4">
    
    @include('layouts.errors')

    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea class="form-control" name="body" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@foreach($post->comments as $comment)
    <div class="media mb-4 singleComment rounded">
        <img class="d-flex mr-3 rounded-circle" src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-512.png" width="50" height="50" alt="">
        <div class="media-body">
        <h5 class="mt-0 commenter">Commenter Name</h5> 
        <small class="text-muted">{{$comment->created_at->diffForHumans()}}</small>
            <p>
                {{$comment->body}}    
            </p>
        </div>
    </div>
@endforeach