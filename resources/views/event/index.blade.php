@extends("layouts/master")

@section("event")
    <section>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Big Events</h1>
                <p class="lead my-3">Big events summary for preview text</p>
                <p class="lead mb-0">
                    <a href="{{ route('event') }}" class="text-white font-weight-bold">Continue reading...</a>
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

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>

    <div class="jumbotron bg-light blog-event-card">
        <h1 class="display-4">Event's sample name</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead text-right">
            <a class="btn btn-outline-primary" href="{{ route('event') }}" role="button">More</a>
        </p>
    </div>
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
