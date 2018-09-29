@extends("layouts/master")

@section("announcement")
<section>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Announcement</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <p class="text-right w-100">
                        <a href="{{ route('announcement') }}">Continue reading</a>
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Announcement</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <p class="text-right w-100">
                        <a href="{{ route('announcement') }}">Continue reading</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("content")
<section>
    <h2 class="pb-3 mb-5 font-italic border-bottom">
        Announcements
    </h2>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
        </p>
    </div>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
        </p>
    </div>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
        </p>
    </div>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
        </p>
    </div>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
        </p>
    </div>

    <div class="mb-4 bg-light p-3">
        <h4 class="font-italic">
            <a class="text-dark" href="{{ route('announcement') }}">Announcements title</a>
        </h4>
        <div class="mb-1 text-muted">Nov 11 by Admin</div>
        <p class="card-text mb-auto text-justify">
            This is a wider card with supporting text below as a natural lead-in to additional content. This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.
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
