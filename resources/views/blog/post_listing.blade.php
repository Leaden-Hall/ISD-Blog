@extends("layouts/master")

@section("content")
<section>
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Your Posts
    </h3>

    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="{{ route('post', $post->id) }}" class="text-dark">{{ $post->title }}</a>
            </h2>
            <p class="blog-post-meta">{{$post->created_at->format('F jS, Y')}} by <a href="{{ route('account', $post->user->id) }}">{{ $post->user->username }}</a></p>

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
        <button type="button" class="btn btn-success btn-lg btn-block">
            Add new post
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
