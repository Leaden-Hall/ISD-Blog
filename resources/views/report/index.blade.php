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
        <tr>
            <th scope="row">1</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>

        <tr>
            <th scope="row">4</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>

        <tr>
            <th scope="row">6</th>
            <td class="text-center">Post_id</td>
            <td class="text-center">Username</td>
            <td class="text-center">
                <span class="badge badge-primary">Pending</span>
                <span class="badge badge-success">Approved</span>
                <span class="badge badge-danger">Canceled</span>
            </td>
            <td class="text-right">
                <a href="{{ route('report') }}" class="btn btn-outline-warning">View</a>
            </td>
        </tr>
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
            <a href="{{ route('event') }}" class="text-white">Big Events</a>
        </h3>
        <p class="text-justify">Big events summary for preview text. This is a wider card with supporting text below as
            a natural lead-in to additional content</p>
    </div>
@endsection

@section("aside-announcement")
    <div class="p-3 mb-3 bg-light rounded">
        <div class="mb-4">
            <h4 class="font-italic">
                <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
            </h4>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
        </div>

        <div class="mb-4">
            <h4 class="font-italic">
                <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
            </h4>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
        </div>
    </div>
@endsection
