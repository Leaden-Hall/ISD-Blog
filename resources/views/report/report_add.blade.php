@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-2 mb-2 font-italic border-bottom">
        New Report of Violation
    </h2>

    <div class="mt-4">
        @include('layouts.errors')
    </div>


    @if(!empty($user))
        <div class="mt-5">
            <h3>Report of user violation</h3>
            <form class="bg-light p-3" method="POST" action="{{ route('report_save', 'user') }}">
                @csrf
                <div class="form-group row">
                    <label for="report-username" class="col-sm-2 col-form-label"><b>Username</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="report-username" value="{{ $user->username }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                    <div class="col-sm-10">
                        <textarea name="reason" class="form-control" id="report-content" rows="5" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="reporter_id" value="{{ Auth::user()->id }}">

                <input type="hidden" name="reported_users_id" value="{{ $user->id }}">

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    @else
        <div class="mt-5">
            <h3>Report of blog post violation</h3>
            <form class="bg-light p-3" method="POST" action="{{ route('report_save', 'post') }}">
                @csrf
                <div class="form-group row">
                    <label for="report-post-title" class="col-sm-2 col-form-label"><b>Post Title</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="report-post-title" value="{{ $post->title }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-post-author" class="col-sm-2 col-form-label"><b>Author</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="report-post-author" value="{{ $post->user->username }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                    <div class="col-sm-10">
                        <textarea name="reason" class="form-control" id="report-content" rows="5" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="reporter_id" value="{{ Auth::user()->id }}">

                <input type="hidden" name="reported_posts_id" value="{{ $post->id }}">

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    @endif

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
