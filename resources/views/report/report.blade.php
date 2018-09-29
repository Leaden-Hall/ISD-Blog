@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-2 mb-2 font-italic border-bottom">
        Your Reports
    </h2>

    <div class="pt-2">
        <div class="alert alert-success" role="alert">
            This report is approved. Action has been taken to handle the violation.
        </div>
    </div>

    <div class="pt-2">
        <div class="alert alert-success" role="alert">
            Report is submitted successfully, this report is pending for admin approval.
        </div>
    </div>

    <div class="pt-2">
        <div class="alert alert-primary" role="alert">
            Pending for admin approval
        </div>
    </div>

    <div class="pt-2">
        <div class="alert alert-danger" role="alert">
            This report is canceled due to the following reason(s):
            <br>
            <p>
                This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
            </p>
        </div>
    </div>

    <div class="mt-5">
        <h3>Report #1 of user violation</h3>
        <form class="bg-light p-3">
            <div class="form-group row">
                <label for="report-username" class="col-sm-2 col-form-label"><b>Username</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="report-username" value="Username">
                </div>
            </div>

            <div class="form-group row">
                <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="report-content" rows="5" readonly>Cum sociis natoque penatibus et magnis, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</textarea>
                </div>
            </div>

            <div class="form-group text-right">
                <a href="#" class="btn btn-danger"
                   onclick="return confirm('Are you certain that you want to cancel this report?');">
                    Cancel Report</a>
            </div>
        </form>
    </div>

    <div class="mt-5">
        <h3>Report #2 of blog post violation</h3>
        <form class="bg-light p-3">
            <div class="form-group row">
                <label for="report-post-title" class="col-sm-2 col-form-label"><b>Post Title</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="report-post-title" value="Post title">
                </div>
            </div>

            <div class="form-group row">
                <label for="report-post-author" class="col-sm-2 col-form-label"><b>Author</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="report-post-author" value="Post author username">
                </div>
            </div>

            <div class="form-group row">
                <label for="report-content" class="col-sm-2 col-form-label"><b>Reason</b></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="report-content" rows="5" readonly>Cum sociis natoque penatibus et magnis, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</textarea>
                </div>
            </div>

            <div class="form-group text-right">
                <a href="#" class="btn btn-danger"
                   onclick="return confirm('Are you certain that you want to cancel this report?');">
                    Cancel Report</a>
            </div>
        </form>
    </div>
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
