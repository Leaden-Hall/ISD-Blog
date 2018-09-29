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
    <h2 class="pb-2 mb-2 mt-2 font-italic border-bottom">
        Event's Name Boostrap Hello World
    </h2>
    <p class="blog-post-meta text-right">January 1, 2014 by <a href="#">Admin</a></p>

    <div class="blog-post-content">
        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>

        <p>Cum sociis natoque penatibus et magnis, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>

        <p>
            <img src="https://previews.123rf.com/images/pinanatreeangle/pinanatreeangle1703/pinanatreeangle170300059/73382214-holi-wide-banner-indian-festival-of-colors-the-inscription-on-the-hindi-translates-as-holi-acid-brig.jpg" class="img-fluid d-block m-auto" alt="sample banner">
        </p>

        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <h2>Heading</h2>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <pre><code>Example code block</code></pre>
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
            <li>Donec id elit non mi porta gravida at eget metus.</li>
            <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        <ol>
            <li>Vestibulum id ligula porta felis euismod semper.</li>
            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
        </ol>
        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
    </div>
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
