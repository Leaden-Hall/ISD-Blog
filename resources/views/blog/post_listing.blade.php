@extends("layouts/master")

@section("content")
<section>
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Your Posts
    </h3>

    @if(!empty($posts))
        @if(count($posts) <= 0)
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                Today's Posts
            </h3>

            <div class="blog-post">
                <h4 class="text-center">No post found</h4>
            </div><!-- /.blog-post -->
        @else
            @if(Session::has('post_success'))
                <div class="pt-2" style="margin-top:50px;">
                    <div class="alert alert-success" role="alert">
                        {{Session::get('post_success')}}
                    </div>
                </div>
            @endif

            @if(Session::has('post_update'))
                <div class="pt-2" style="margin-top:50px;">
                    <div class="alert alert-success" role="alert">
                        {{Session::get('post_update')}}
                    </div>
                </div>
            @endif

            @foreach($posts as $post)

                <div class="blog-post">
                    <h2 class="blog-post-title">
                        <a href="{{ route('post', $post->id) }}" class="text-dark">{{ $post->title }}</a>
                    </h2>
                    <p class="blog-post-meta">{{$post->created_at->format('F jS, Y')}} by <a href="{{ route('account', $post->user->id) }}">{{ $post->user->username }}</a></p>

                    <p>{{ $post->summary }}</p>
                </div><!-- /.blog-post -->
            @endforeach

            {{ $posts->links() }}
            <div class="clear-fix"></div>
        @endif
    @endif

</section>
@endsection

@section("aside-action-top")
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
