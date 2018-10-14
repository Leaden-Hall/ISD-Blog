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
    <h2 class="pb-3 mb-5 font-italic border-bottom">
        Announcements
    </h2>

    <h2 class="blog-post-title">{{ $announcement->title }}</h2>
    <p class="blog-post-meta">{{ $announcement->created_at->format('F jS') }} by Admin</p>

    <div class="blog-post-content text-justify">
        <p>{{ $announcement->content }}</p>
    </div>
</section>
@endsection

@section("aside-event")
    <div class="p-2 mb-3 bg-dark rounded text-white">
        <h3 class="font-italic">
            <a href="{{ route('event', $recentEvents->id) }}" class="text-white">{{ $recentEvents->title }}</a>
        </h3>
        <p class="text-justify">{{ $recentEvents->summary }}</p>
    </div>
@endsection
