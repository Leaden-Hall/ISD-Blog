@extends("layouts/master")

@section("CSS")
    <link rel="stylesheet" href="{{ asset('/storage/assets/textEditor/css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/assets/textEditor/css/richtext.min.css') }}">
@endsection

@section("content")
<section>
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        New Blog Post
    </h3>

    <div class="mt-4">
        @include('layouts.errors')
    </div>

    <div class="pt-4">
        @if(!empty($post))
            <form method="POST" action="{{ route('post_update', $post->id) }}">
                @csrf
                <div class="form-group">
                    <label for="blog-title">Title</label>
                    <input type="text" name="title" class="form-control" id="blog-title" required value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="blog-summary">Summary</label>
                    <textarea name="summary" class="form-control" id="blog-summary" rows="3" required>{{ $post->summary }}</textarea>
                </div>

                <div class="form-group">
                    <label for="blog-content">Content</label>
                    <textarea name="content" class="form-control" id="blog-content" rows="3" required>{{ $post->content }}</textarea>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group mt-5">
                    <div class="row">
                        <div class="col-6">
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        @else
            <form method="POST" action="{{ route('post_save') }}">
                @csrf
                <div class="form-group">
                    <label for="blog-title">Title</label>
                    <input type="text" name="title" class="form-control" id="blog-title" required>
                </div>

                <div class="form-group">
                    <label for="blog-summary">Summary</label>
                    <textarea name="summary" class="form-control" id="blog-summary" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="blog-content">Content</label>
                    <textarea name="content" class="form-control" id="blog-content" rows="3" required></textarea>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group mt-5">
                    <div class="row">
                        <div class="col-6">
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-outline-success">Publish</button>
                        </div>
                    </div>
                </div>
            </form>
        @endif
    </div>
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

@section("JS")
    <script src="{{ asset('/storage/assets/textEditor/js/jquery.richtext.min.js') }}"></script>
    <script defer src="{{ asset('storage/assets/textEditor/js/FontAweSome-5.0.8.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#blog-content').richText();
        });
    </script>
@endsection
