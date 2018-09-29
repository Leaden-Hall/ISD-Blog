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
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Today's Posts
    </h3>

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post') }}" class="text-dark">Another blog post</a>
        </h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="{{ route('account') }}">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post') }}" class="text-dark">Another blog post</a>
        </h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="{{ route('account') }}">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post') }}" class="text-dark">Another blog post</a>
        </h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="{{ route('account') }}">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post') }}" class="text-dark">Another blog post</a>
        </h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="{{ route('account') }}">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div><!-- /.blog-post -->

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="{{ route('post') }}" class="text-dark">Another blog post</a>
        </h2>
        <p class="blog-post-meta">December 14, 2013 by <a href="{{ route('account') }}">Chris</a></p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
            <li>Donec id elit non mi porta gravida at eget metus.</li>
            <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
    </div><!-- /.blog-post -->

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

@section("aside-action-top")
    <div class="p-3">
        <button type="button" class="btn btn-success btn-lg btn-block">
            Add new post
        </button>
    </div>
@endsection
