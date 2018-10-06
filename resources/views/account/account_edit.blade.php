@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Edit Account
    </h2>

    <div class="error-message">
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger">Your username is empty</li>
            <li class="list-group-item list-group-item-danger">Your profile picture is not a JPG/PNG/JPEG type image</li>
            <li class="list-group-item list-group-item-danger">Your username is already exist, pick another</li>
        </ul>
    </div>

    <div class="alert alert-success p-3 mt-2">
        Your account information has been updated successfully.
    </div>

    <div class="mt-5">
        <form action="" method="POST" name="account-edit">
            <div class="row">
                <div class="col-6">
                    <div class="form-group text-center">
                        <img src="{{ asset('/storage/assets/ava_sample.jpg') }}" width="200px" height="200px">
                        <input type="file" class="form-control-file" id="account-new-avatar">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group row">
                        <label for="account-email" class="col-sm-5 col-form-label"><b>Email</b></label>
                        <div class="col-sm-7">
                            <input type="text" readonly class="form-control-plaintext" id="account-email" value="email@example.com">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="account-username" class="col-sm-5 col-form-label"><b>Username</b></label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="account-username" value="Username">
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
                            <select class="form-control" id="account-noti">
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-right mt-5">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
