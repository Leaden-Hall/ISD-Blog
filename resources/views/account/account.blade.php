@extends("layouts/master")

@section("content")
    <section>
        @if($account->id == Auth::user()->id)
            <h2 class="pb-3 mb-4 font-italic border-bottom">
                Your Account
            </h2>
        @else
            <h2 class="pb-3 mb-4 font-italic border-bottom">
                {{ $account->username }}'s Account
            </h2>
        @endif

        @if(Session::has("password_update"))
            <div class="alert alert-success p-3 mt-2">
                {{Session::get("password_update")}}
            </div>
        @endif

        <div class="mt-5">
            <div class="row">
                <div class="col-6">
                    <form>
                        @csrf
                        <div class="form-group text-center">
                            <img src="{{ $account->avatar }}" width="200px" height="200px">
                        </div>

                        <div class="form-group row">
                            <label for="account-avatar" class="col-sm-5 col-form-label"><b>Avatar</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-avatar" value="{{ $account->avatar }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-email" class="col-sm-5 col-form-label"><b>Email</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-email" value="{{ $account->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-username" class="col-sm-5 col-form-label"><b>Username</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-username" value="{{ $account->username }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-username" class="col-sm-5 col-form-label"><b>Gender</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-username" value="{{ $account->gender() }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-username" class="col-sm-5 col-form-label"><b>Phone Number</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-username" value="{{ $account->phone }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-noti" class="col-sm-5 col-form-label"><b>Notification</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-noti" value="{{ $account->isNotified() }}">
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-6">
                    <form>
                        <div class="form-group row">
                            <label for="account-role" class="col-sm-5 col-form-label"><b>Role</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-role" value="{{ $account->role->title }}">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="account-status" class="col-sm-5 col-form-label"><b>Status</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-status" value="{{ $account->status() }}">
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label for="account-active-post" class="col-sm-5 col-form-label"><b>Active Posts</b></label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="number" readonly class="form-control-plaintext" id="account-active-post" value="10">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="account-pending-post" class="col-sm-5 col-form-label"><b>Pending Posts</b></label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="number" readonly class="form-control-plaintext"--}}
                                       {{--id="account-pending-post" value="10">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="account-cancel-post" class="col-sm-5 col-form-label"><b>Canceled Posts</b></label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="number" readonly class="form-control-plaintext" id="account-cancel-post" value="10">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="account-violation" class="col-sm-5 col-form-label"><b>Violation</b></label>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<input type="number" readonly class="form-control-plaintext" id="account-violation" value="20">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label for="account-create" class="col-sm-5 col-form-label"><b>Created At</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-create" value="{{ $account->created_at->toDayDateTimeString() }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-modify" class="col-sm-5 col-form-label"><b>Last Modified</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-modify" value="{{ $account->updated_at->toDayDateTimeString() }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if($account->id == Auth::user()->id)
            <div class="row mt-3">
                <div class="col-6">
                    <a href="{{ route('account_edit', $account->id) }}" class="btn btn-outline-primary">Edit Profile</a>

                </div>

                <div class="col-6 text-right">
                    <a href="{{ route('password', $account->id) }}" class="btn btn-outline-secondary">Change Password</a>
                </div>
            </div>
        @endif
    </section>
@endsection

@section("aside-action-top")
    @if(Auth::user()->id != $account->id)
        <div class="p-3">
            <a href="{{ route('report_add', ['user', $account->id]) }}" class="btn btn-warning btn-lg btn-block">
                Report This User
            </a>
        </div>
    @endif
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

@section("aside-action-bottom")
    @if($account->id == Auth::user()->id)
        <div class="p-3">
            <a href="{{ route('account_deactivate', $account->id) }}" class="btn btn-danger btn-lg btn-block"
               onclick="return confirm('Are you certain that you want to deactivate your account?');">
                Deactivate Account
            </a>
        </div>
    @endif
@endsection

