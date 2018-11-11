@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Edit Account
    </h2>

    @include('layouts.errors')

    @if(!empty($editAccount))
        <div class="mt-5">
            <form action="{{ route('account_update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group text-center">
                            <img src="{{ $editAccount->avatar }}" width="250px" height="250px">
                            <br>
                            <br>
                            <input type="file" class="form-control-file" id="account-new-avatar" name="avatar" accept="image/x-png,image/jpeg">

                            <div class="mt-5" id="preview-section" style="display: none">
                                <h5>Avatar Preview</h5>
                                <img id="preview" src="#" alt="Preview new avatar" width="250px" height="250px">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group row">
                            <label for="account-email" class="col-sm-5 col-form-label"><b>Email</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-email" value="{{ $editAccount->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-username" class="col-sm-5 col-form-label"><b>Username</b></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="account-username" value="{{ $editAccount->username }}" name="username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-gender" class="col-sm-5 col-form-label"><b>Gender</b></label>
                            <div class="col-sm-7">
                                <select class="form-control" id="account-gender" name="gender">
                                    @if($editAccount->gender == 1)
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                        <option value="2">Undefined</option>
                                    @elseif($editAccount->gender == 2)
                                        <option value="2">Undefined</option>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    @else
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>
                                        <option value="2">Undefined</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-phone" class="col-sm-5 col-form-label"><b>Phone</b></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="account-phone" value="{{ $editAccount->phone }}" name="phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-avatar" class="col-sm-5 col-form-label"><b>Avatar</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-avatar" value="{{ $editAccount->avatar }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-noti" class="col-sm-5 col-form-label"><b>Notification</b></label>
                            <div class="col-sm-7">
                                <select class="form-control" id="account-noti" name="notify">
                                    @if($editAccount->is_notified == 1)
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    @else
                                        <option value="0">Disable</option>
                                        <option value="1">Enable</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{ $editAccount->id }}">

                        <div class="form-group text-right mt-5">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif

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
    <script type="text/javascript">
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#account-new-avatar").change(function() {
            readURL(this);
            $("#preview-section").show();
        });

    </script>
@endsection
