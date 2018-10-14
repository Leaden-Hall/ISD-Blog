<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Viet Pointer Blog">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/storage/assets/favicon.ico') }}">

    <title>Vietpointer</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/storage/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/storage/assets/css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('/storage/assets/css/blog.css') }}" rel="stylesheet">

    <!-- for external view CSS styling -->
    @yield("CSS")
</head>

<body>

<section class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="http://www.vietpointer.vn/" target="_blank">
                    Vietpointer
                </a>
            </div>

            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="{{ route('home') }}">Vietpointer Blog</a>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Auth::check())
                            {{ Auth::user()->username }}
                        @endif
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('account', Auth::user()->id) }}">Account</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light my-1 mb-4">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts', Auth::user()->id) }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcements') }}">Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports', Auth::user()->id) }}">Reports</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    @yield("event")

    @yield("announcement")
</section>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            @yield("content")
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar pt-5">

            @yield("aside-action-top")

            <div class="aside-event">
                @yield("aside-event")
            </div>

            <div class="aside-announcement">
                @yield("aside-announcement")
            </div>

            <div class="p-3">
                <h4 class="font-italic">Post Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">January 2018</a></li>
                    <li><a href="#">February 2018</a></li>
                    <li><a href="#">March 2018</a></li>
                    <li><a href="#">April 2018</a></li>
                    <li><a href="#">May 2018</a></li>
                    <li><a href="#">June 2018</a></li>
                    <li><a href="#">July 2018</a></li>
                    <li><a href="#">August 2018</a></li>
                    <li><a href="#">September 2018</a></li>
                    <li><a href="#">October 2018</a></li>
                    <li><a href="#">November 2018</a></li>
                    <li><a href="#">December 2018</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Other News</h4>
                <ol class="list-unstyled">
                    <li><a href="https://vnexpress.net/" target="_blank">VnExpress</a></li>
                    <li><a href="https://dantri.com.vn/" target="_blank">Dantri</a></li>
                    <li><a href="https://baomoi.com/" target="_blank">Baomoi</a></li>
                    <li><a href="http://kenh14.vn/" target="_blank">Kenh14</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="https://github.com/" target="_blank">GitHub</a></li>
                    <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                    <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                    <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                </ol>
            </div>

            @yield("aside-action-bottom")

        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer bg-dark mt-5">
    <div>
        <img src="{{ asset('/storage/assets/VietPointer_logo.png') }}" alt="VietPointer_logo">
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/storage/assets/js/jquery-3.3.1.slim.min.js') }}" ></script>
<script src="{{ asset('/storage/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/storage/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/storage/assets/js/holder.min.js') }}"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

<!-- for external view JS -->
@yield("JS")
</body>
</html>
