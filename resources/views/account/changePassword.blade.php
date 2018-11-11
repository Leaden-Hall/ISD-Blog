@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Change Password
    </h2>

    @include('layouts.errors')

    @if(Session::has("password_update_fail"))
        <div class="alert alert-danger p-3 mt-2">
            {{Session::get("password_update_fail")}}
        </div>
    @endif

    <div class="mt-5">
        <form class="p-3" method="POST" action="{{ route('change_password', Auth::getUser()->id) }}">
            @csrf
            <div class="form-group row">
                <label for="oldPass" class="col-sm-4 col-form-label">Old Password</label>
                <div class="col-sm-8">
                    <input type="password" name="old_password" class="form-control" id="oldPass" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="newPass" class="col-sm-4 col-form-label">New Password</label>
                <div class="col-sm-8">
                    <input type="password" name="password" class="form-control" id="newPass" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="confirmPass" class="col-sm-4 col-form-label">Confirm New Password</label>
                <div class="col-sm-8">
                    <input type="password" name="password_confirmation" class="form-control" id="confirmPass" required>
                </div>
            </div>

            <div class="form-group text-right mt-5">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
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
