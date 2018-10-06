@extends("layouts/master")

@section("content")
    <section>
        <h2 class="pb-3 mb-4 font-italic border-bottom">
            Your Account
        </h2>

        <div class="mt-5">
            <div class="row">
                <div class="col-6">
                    <form>
                        <div class="form-group text-center">
                            <img src="{{asset('/storage/assets/ava_sample.jpg')}}" width="200px" height="200px">
                        </div>

                        <div class="form-group row">
                            <label for="account-email" class="col-sm-5 col-form-label"><b>Email</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-email" value="email@example.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-username" class="col-sm-5 col-form-label"><b>Username</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-username" value="Username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-avatar" class="col-sm-5 col-form-label"><b>Avatar</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-avatar" value="avatar.jpg">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-noti" class="col-sm-5 col-form-label"><b>Notification</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-noti" value="Enable">
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-6">
                    <form>
                        <div class="form-group row">
                            <label for="account-role" class="col-sm-5 col-form-label"><b>Role</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-role"
                                       value="Regular User">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-status" class="col-sm-5 col-form-label"><b>Status</b></label>
                            <div class="col-sm-7">
                                <input type="text" readonly class="form-control-plaintext" id="account-status" value="Active">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-active-post" class="col-sm-5 col-form-label"><b>Active Posts</b></label>
                            <div class="col-sm-7">
                                <input type="number" readonly class="form-control-plaintext" id="account-active-post" value="10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-pending-post" class="col-sm-5 col-form-label"><b>Pending Posts</b></label>
                            <div class="col-sm-7">
                                <input type="number" readonly class="form-control-plaintext"
                                       id="account-pending-post" value="10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-cancel-post" class="col-sm-5 col-form-label"><b>Canceled Posts</b></label>
                            <div class="col-sm-7">
                                <input type="number" readonly class="form-control-plaintext" id="account-cancel-post" value="10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-violation" class="col-sm-5 col-form-label"><b>Violation</b></label>
                            <div class="col-sm-7">
                                <input type="number" readonly class="form-control-plaintext" id="account-violation" value="20">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-create" class="col-sm-5 col-form-label"><b>Created At</b></label>
                            <div class="col-sm-7">
                                <input type="datetime-local" readonly class="form-control-plaintext" id="account-create" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account-modify" class="col-sm-5 col-form-label"><b>Last Modified</b></label>
                            <div class="col-sm-7">
                                <input type="datetime-local" readonly class="form-control-plaintext" id="account-modify" value="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <a href="{{ route('account_edit') }}" class="btn btn-outline-primary">Edit Profile</a>

            </div>

            <div class="col-6 text-right">
                <a href="{{ route('changePassword') }}" class="btn btn-outline-secondary">Change Password</a>
            </div>
        </div>
    </section>
@endsection
