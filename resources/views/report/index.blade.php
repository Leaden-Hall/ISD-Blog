@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Your Reports
    </h2>

    <div class="btn-group float-right mb-5" role="group">
        <a href="{{ route('reports', ["all", Auth::user()->id]) }}"
           class="btn btn-outline-secondary @if($status == 'all') active @endif ">All</a>

        <a href="{{ route('reports', ["pending", Auth::user()->id]) }}"
           class="btn btn-outline-primary @if($status == 'pending') active @endif ">Pending</a>

        <a href="{{ route('reports', ["approved", Auth::user()->id]) }}"
           class="btn btn-outline-success @if($status == 'approved') active @endif ">Approved</a>

        <a href="{{ route('reports', ["canceled", Auth::user()->id]) }}"
           class="btn btn-outline-danger @if($status == 'canceled') active @endif ">Canceled</a>
    </div>

    @if(Session::has('report_success'))
        <div class="pt-2" style="margin-top:75px;">
            <div class="alert alert-success" role="alert">
                {{Session::get('report_success')}}
            </div>
        </div>
    @endif

    @if(Session::has('report_cancel'))
        <div class="pt-2" style="margin-top:75px;">
            <div class="alert alert-success" role="alert">
                {{Session::get('report_cancel')}}
            </div>
        </div>
    @endif

    @if(Session::has('report_update'))
        <div class="pt-2" style="margin-top:75px;">
            <div class="alert alert-success" role="alert">
                {{Session::get('report_update')}}
            </div>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col" class="text-center">Post</th>
            <th scope="col" class="text-center">User</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-right">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reports as $report)
        <tr>
            <th scope="row">{{ $report->id }}</th>
            <td class="text-center">{{ $report->reported_posts_id }}</td>
            <td class="text-center">{{ $report->reported_users_id }}</td>
            <td class="text-center">
                @if($report->isPending())
                    <span class="badge badge-primary">Pending</span>
                @endif

                @if($report->isApproved())
                        <span class="badge badge-success">Approved</span>
                @endif

                @if($report->isCanceled())
                        <span class="badge badge-danger">Canceled</span>
                @endif


            </td>
            <td class="text-right">
                <a href="{{ route('report', $report->id) }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $reports->links() }}
    
    <div class="clear-fix"></div>
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
