@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Your Reports
    </h2>

    <div class="btn-group float-right mb-5" role="group">
        <button type="button" class="btn btn-outline-secondary">All</button>
        <button type="button" class="btn btn-outline-primary">Pending</button>
        <button type="button" class="btn btn-outline-success">Approved</button>
        <button type="button" class="btn btn-outline-danger">Canceled</button>
    </div>


    <div class="pt-2" style="margin-top:75px;">
        <div class="alert alert-success" role="alert">
            Report is canceled successfully.
        </div>
    </div>

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
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report', $report->id) }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

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
