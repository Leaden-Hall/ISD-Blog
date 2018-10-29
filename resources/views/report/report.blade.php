@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-2 mb-2 font-italic border-bottom">
        Your Reports
    </h2>


    @if($report->isPending())
        <div class="pt-2">
            <div class="alert alert-primary" role="alert">
                Pending for admin approval
            </div>
        </div>
    @endif

    @if($report->isApproved())
        <div class="pt-2">
            <div class="alert alert-success" role="alert">
                This report is approved. Action has been taken to handle the violation.
            </div>
        </div>
    @endif

    @if($report->isCanceled())
        <div class="pt-2">
            <div class="alert alert-danger" role="alert">
                This report is canceled
            </div>
        </div>
    @endif


    @if(!empty($post))
        <div class="mt-5">
            <h3>Report #{{ $report->id }} of blog post violation</h3>
            <form class="bg-light p-3" method="POST" action="{{ route('report_update', $report->id) }}">
                @csrf
                <div class="form-group row">
                    <label for="report-post-title" class="col-sm-2 col-form-label"><b>Post Title</b></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="report-post-title" value="{{ $post->title }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-post-author" class="col-sm-2 col-form-label"><b>Author</b></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="report-post-author" value="{{ $post->user->username }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                    <div class="col-sm-10">
                        @if(!$report->isPending())
                            <textarea readonly class="form-control" id="report-content" rows="5">{{ $report->content }}</textarea>
                        @else
                            <textarea name="update_reason" class="form-control" id="report-content" rows="5">{{ $report->content }}</textarea>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Created At</b></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="report-post-author" value="{{ $report->created_at->toDayDateTimeString() }}">
                    </div>
                </div>

                @if($report->isPending())
                    <div class="form-group row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                        <div class="col-6 text-right">
                            <a href="{{ route('report_cancel', $report->id) }}" class="btn btn-danger"
                               onclick="return confirm('Are you certain that you want to cancel this report?');">
                                Cancel Report</a>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    @endif

    @if(!empty($user))
        <div class="mt-5">
            <h3>Report #{{ $report->id }} of user violation</h3>
            <form class="bg-light p-3" method="POST" action="{{ route('report_update', $report->id) }}">
                @csrf
                <div class="form-group row">
                    <label for="report-username" class="col-sm-2 col-form-label"><b>Username</b></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="report-username" value="{{ $user->username }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                    <div class="col-sm-10">
                        @if(!$report->isPending())
                            <textarea readonly class="form-control" id="report-content" rows="5">{{ $report->content }}</textarea>
                        @else
                            <textarea name="update_reason" class="form-control" id="report-content" rows="5">{{ $report->content }}</textarea>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="report-content" class="col-sm-2 col-form-label"><b>Created date</b></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="report-post-author" value="{{ $report->created_at->toDayDateTimeString() }}">
                    </div>
                </div>

                @if($report->isPending())
                    <div class="form-group row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                        <div class="col-6 text-right">
                            <a href="{{ route('report_cancel', $report->id) }}" class="btn btn-danger"
                               onclick="return confirm('Are you certain that you want to cancel this report?');">
                                Cancel Report</a>
                        </div>
                    </div>
                @endif
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
