@extends("layouts/master")

@section("event")
    <section>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="px-0">
                <h1 class="display-4 font-italic">{{ $recentEvents->title }}</h1>
                <p class="lead my-3">{{ $recentEvents->summary }}</p>
                <p class="lead mb-0">
                    <a href="{{ route('event', $recentEvents->id) }}" class="text-white font-weight-bold">Continue reading...</a>
                </p>
            </div>
        </div>
    </section>
@endsection

@section("content")
<section>
    <h2 class="pb-2 mb-2 mt-2 font-italic border-bottom">
        {{ $event->title }}
    </h2>
    <p class="blog-post-meta text-right">{{ $event->created_at->format('F jS, Y') }} by <a href="#">Admin</a></p>

    <div class="blog-post-content">
        <p class="text-justify">{{ $event->summary }}</p>

        <p>
            <img src="{{ $event->banner }}" class="img-fluid d-block m-auto" alt="sample banner">
        </p>

        <p class="text-justify">{{ $event->content }}</p>
    </div>
</section>
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
