@extends("layouts/master")

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

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Recent Events
    </h2>
    @foreach($events as $event)
    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">{{ $event->title }}</h1>
        <p class="lead text-justify">{{ $event->summary }}</p>
        <hr class="my-4">
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event', $event->id) }}" role="button">More</a>
        </p>
    </div>
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
