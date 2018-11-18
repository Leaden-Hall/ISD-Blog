@extends("layouts/master")

@section("content")
<section>
    <div class="blog-post">
        @if(Auth::user()->id == $post->users_id)
            @if($post->isActive())
                <div class="pt-3">
                    <div class="alert alert-success" role="alert">
                        This post is approved and visible to everyone
                    </div>
                </div>
            @endif

            @if($post->isPending())
                <div class="pt-3">
                    <div class="alert alert-primary" role="alert">
                        Pending for Administrator's approval
                    </div>
                </div>
            @endif

            @if($post->isCanceled())
                <div class="pt-3">
                    <div class="alert alert-danger" role="alert">
                        This post has been canceled
                    </div>
                </div>
            @endif
        @endif

        <div class="mt-4">
            @include('layouts.errors')
        </div>

        @if(Session::has("Comment_delete_success"))
            <div class="pt-4">
                <div class="alert alert-success" role="alert">
                    {{Session::get("Comment_delete_success")}}
                </div>
            </div>
        @endif

        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->format('F jS, Y') }} by <a href="{{ route('account', $post->user->id) }}">{{ $post->user->username }}</a></p>

        <div class="blog-post-content">
            <p>{{ $post->summary }}</p>
            <br>
            <div>{!! $post->content !!}</div>
        </div>
    </div><!-- /.blog-post -->

    <hr>
    <h5 class="bg-light text-dark p-2 mb-3">Comments</h5>
    @if($post->isActive())
        @if($post->allComments($post->id) > 0)
            @foreach($allComments as $comment)
                @if(empty($comment->parent_id))
                    <div class="card mt-3">
                        <div class="card-body" id="comment{{ $comment->id }}">
                            <h5 class="card-title">{{ $comment->user->username }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</h6>
                            <p class="card-text">{{ $comment->content }} <br>
                                @if($comment->updated_at)
                                    <span class="text-muted">Last edited: {{ $comment->updated_at->diffForHumans() }}</span>
                                @endif

                            </p>

                            @if(!empty($comment->childComment($comment->id)))
                                @foreach($comment->childComment($comment->id) as $childComment)
                                    <div class="pl-4 child-comment mb-3">
                                        <h6 class="card-subtitle">{{ $childComment->user->username }} - <span class="text-muted">{{ $childComment->created_at->diffForHumans() }}</span></h6>
                                        <p class="card-text">{{ $childComment->content }}</p>
                                    </div>
                                @endforeach
                            @endif

                            @if(Session::has("Comment_reply_success_$comment->id"))
                                <div class="pt-4">
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get("Comment_reply_success_$comment->id")}}
                                    </div>
                                </div>
                            @endif

                            <div class="row mb-3">
                                <div class="col-6">
                                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseReply{{ $comment->id }}" aria-expanded="false" aria-controls="collapseReply2">Reply</button>
                                </div>

                                @if($comment->users_id == Auth::user()->id)
                                    <div class="col-6 text-right">
                                        <a href="{{ route('comment_edit', [$comment->id, $post->id]) }}" class="btn btn-outline-secondary">Edit</a>
                                        <a href="{{ route('comment_delete', [$comment->id, $post->id]) }}" class="btn btn-outline-danger"
                                           onclick="return confirm('Are you certain that you want to delete this comment?');">Delete</a>
                                    </div>
                                @endif

                            </div>

                            <div class="collapse" id="collapseReply{{ $comment->id }}">
                                <form method="POST" action="{{ route('comment_save') }}" id="replyForm{{ $comment->id }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-10">
                                            <input type="text" name="comment_content" class="form-control">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                        </div>

                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <div class="error-message">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">This post has no comment</li>
                </ul>
            </div>
        @endif

        @if(Session::has('Comment_success'))
            <div class="pt-4">
                <div class="alert alert-success" role="alert">
                    {{Session::get('Comment_success')}}
                </div>
            </div>
        @endif

        @if(!empty($editComment))
            <form class="mt-3"  method="POST" action="{{ route('comment_update') }}" id="comment-update-form">
                @csrf
                <div class="form-group">
                    <textarea name="comment_content" class="form-control" id="blog-comment" rows="4" required>{{ $editComment->content }}</textarea>
                </div>

                <input type="hidden" name="post_id" value="{{ $editComment->posts_id }}">
                <input type="hidden" name="comment_id" value="{{ $editComment->id }}">

                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary"><b>Update</b></button>
                </div>
            </form>
        @else
            <form class="mt-3"  method="POST" action="{{ route('comment_save') }}" id="comment-form">
                @csrf
                <div class="form-group">
                    <textarea name="comment_content" class="form-control" id="blog-comment" rows="4" required></textarea>
                </div>

                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group float-right">
                    <button type="submit" class="btn btn-primary"><b>Comment</b></button>
                </div>
            </form>
        @endif


        @if(!empty($editComment))
            <script>
                var elmnt = document.getElementById("comment-update-form");
                elmnt.scrollIntoView();
            </script>
        @endif


    @else
        <div class="error-message">
            <ul class="list-group">
                <li class="list-group-item list-group-item-danger">Comment function is not available in inactive posts</li>
            </ul>
        </div>
    @endif
</section>
@endsection

@section("aside-action-top")
    @if(Auth::user()->id == $post->users_id)
        <div class="p-3">
            <a href="{{ route('post_edit', $post->id) }}" class="btn btn-primary btn-lg btn-block">
                Edit This Post
            </a>
        </div>
    @else
        <div class="p-3">
            <a href="{{ route('report_add', ['post', $post->id]) }}" class="btn btn-warning btn-lg btn-block">
                Report Violation
            </a>
        </div>
    @endif

    <div class="p-3">
        <a href="{{ route('post_create') }}" class="btn btn-success btn-lg btn-block">
            Add new post
        </a>
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
    @if($post->users_id == Auth::user()->id)
        <div class="p-3">
            <a href="{{ route('post_cancel', $post->id) }}" class="btn btn-danger btn-lg btn-block"
               onclick="return confirm('Are you certain that you want to cancel this post?');">
                Cancel This Post
            </a>
        </div>
    @endif
@endsection
