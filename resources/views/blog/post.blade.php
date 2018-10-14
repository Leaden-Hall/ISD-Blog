@extends("layouts/master")

@section("content")
<section>
    <div class="blog-post">

        <div class="pt-3">
            <div class="alert alert-success" role="alert">
                This post is approved and visible to everyone
            </div>
        </div>

        <div class="pt-3">
            <div class="alert alert-warning" role="alert">
                Pending for approval
            </div>
        </div>

        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->format('F jS, Y') }} by <a href="{{ route('account', $post->user->id) }}">{{ $post->user->username }}</a></p>

        <div class="blog-post-content">
            <p>{{ $post->summary }}</p>

            <p>{{ $post->content }}</p>
        </div>
    </div><!-- /.blog-post -->

    <hr>
    <h5 class="bg-light text-dark p-2 mb-3">Comments</h5>

    <div class="error-message">
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger">The comment's content is empty</li>
        </ul>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Username</h5>
            <h6 class="card-subtitle mb-2 text-muted">5 minutes ago</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <div class="pl-4 child-comment mb-3">
                <h6 class="card-subtitle">Username - <span class="text-muted">2 minutes ago</span></h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk </p>
            </div>

            <div class="mb-3">
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseReply1" aria-expanded="false" aria-controls="collapseReply1">Reply</button>
            </div>

            <div class="collapse" id="collapseReply1">
                <form>
                    <div class="form-group row">
                        <div class="col-10">
                            <input type="text" name="replyComment" class="form-control">
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Username</h5>
            <h6 class="card-subtitle mb-2 text-muted">5 minutes ago</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <div class="row mb-3">
                <div class="col-6">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseReply2" aria-expanded="false" aria-controls="collapseReply2">Reply</button>
                </div>

                <div class="col-6 text-right">
                    <a href="#" class="btn btn-outline-secondary">Edit</a>
                    <a href="#" class="btn btn-outline-danger"
                       onclick="return confirm('Are you certain that you want to delete this comment?');">Delete</a>
                </div>
            </div>

            <div class="collapse" id="collapseReply2">
                <form>
                    <div class="form-group row">
                        <div class="col-10">
                            <input type="text" name="replyComment" class="form-control">
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <form class="mt-3">
        <div class="form-group">
            <textarea class="form-control" id="blog-comment" rows="4"></textarea>
        </div>
        <div class="form-group float-right">
            <button type="submit" class="btn btn-primary"><b>Comment</b></button>
        </div>
    </form>
</section>
@endsection

@section("aside-action-top")
    <div class="p-3">
        <button type="button" class="btn btn-primary btn-lg btn-block">
            Edit This Post
        </button>
    </div>

    <div class="p-3">
        <button type="button" class="btn btn-warning btn-lg btn-block">
            Report Violation
        </button>
    </div>

    <div class="p-3">
        <button type="button" class="btn btn-success btn-lg btn-block">
            Add New Post
        </button>
    </div>
@endsection

@section("aside-event")
    <div class="p-2 mb-3 bg-dark rounded text-white">
        <h3 class="font-italic">
            <a href="{{ route('event', $recentEvents->id) }}" class="text-white">{{ $recentEvents->title }}</a>
        </h3>
        <p class="text-justify">{{ $recentEvents->summary }}</p>
    </div>
@endsection

@section("aside-announcement")
    <div class="p-3 mb-3 bg-light rounded">
        @foreach($recentAnnouncements as $recentAnnouncement)
            <div class="mb-4">
                <h4 class="font-italic">
                    <a class="text-dark" href="{{ route('announcement', $recentAnnouncement->id) }}">{{ $recentAnnouncement->title }}</a>
                </h4>
                <div class="mb-1 text-muted">{{ $recentAnnouncement->created_at->format('F jS') }}</div>
            </div>
        @endforeach
    </div>
@endsection

@section("aside-action-bottom")
    <div class="p-3">
        <a href="#" class="btn btn-danger btn-lg btn-block"
           onclick="return confirm('Are you certain that you want to delete this post?');">
            Delete This Post
        </a>
    </div>
@endsection
