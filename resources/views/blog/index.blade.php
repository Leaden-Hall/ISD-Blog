@extends("layouts/master")

@section('CSS')
    <style>
        .announcement-content {
            text-overflow: ellipsis;
            overflow: hidden;
            text-align: justify;
        }
    </style>
@endsection

@section("event")
<section>
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="px-0">
            <h1 class="display-4 font-italic">{{ $recentEvents->title }}</h1>
            <p class="lead my-3">{{ $recentEvents->summary }}</p>
            <p class="lead mb-0">
                <a href="{{ route('event', $recentEvents->id) }}" class="text-white font-weight-bold">Continue reading</a>
            </p>
        </div>
    </div>
</section>
@endsection

@section("announcement")
    <section>
        <div class="row mb-2">
            @foreach($recentAnnouncements as $recentAnnouncement)
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Announcement</strong>
                        <h3 class="mb-0">{{ $recentAnnouncement->title }}</h3>
                        <div class="mb-1 text-muted">{{ $recentAnnouncement->created_at->format('F jS') }}</div>
                        <p class="card-text mb-auto announcement-content">{{ $recentAnnouncement->content }}</p>
                        <p class="text-right w-100">
                            <a href="{{ route('announcement', $recentAnnouncement->id) }}">Continue reading</a>
                        </p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection

@section("content")
<section>
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Today's Posts
    </h3>

    @foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post', $post->id ) }}" class="text-dark">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->format('F jS, Y') }} by <a href="{{ route('account', $post->user->id) }}">{{ $post->user->username }}</a></p>

        <p>{{ $post->summary }}</p>
    </div><!-- /.blog-post -->
    @endforeach

    <nav class="float-right mt-5">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
    <div class="clear-fix"></div>
</section>
@endsection

@section("aside-action-top")
    <div class="p-3">
        <a href="{{ route('post_create') }}" class="btn btn-success btn-lg btn-block">
            Add new post
        </a>
    </div>
@endsection
