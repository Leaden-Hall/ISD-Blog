@extends("layouts/master")

@section("content")
<section>
    <h2 class="pb-3 mb-4 font-italic border-bottom">
        Change Password
    </h2>

    <div class="error-message">
        <ul class="list-group">
            <li class="list-group-item list-group-item-danger">Old Passowrd field is required</li>
            <li class="list-group-item list-group-item-danger">New Password is required</li>
            <li class="list-group-item list-group-item-danger">Confirm New Password field is required</li>
            <li class="list-group-item list-group-item-danger">Old Password is not correct</li>
            <li class="list-group-item list-group-item-danger">Passowrd confirmation does not matach</li>
        </ul>
    </div>

    <div class="alert alert-success p-3 mt-2">
        Your account password has been updated successfully.
    </div>

    <div class="mt-5">
        <form class="p-3">
            <div class="form-group row">
                <label for="oldPass" class="col-sm-4 col-form-label">Old Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="oldPass" placeholder="Old Password">
                </div>
            </div>

            <div class="form-group row">
                <label for="newPass" class="col-sm-4 col-form-label">New Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="newPass" placeholder="New Password">
                </div>
            </div>

            <div class="form-group row">
                <label for="confirmPass" class="col-sm-4 col-form-label">Confirm New Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="confirmPass" placeholder="Confirm Password">
                </div>
            </div>

            <div class="form-group text-right mt-5">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>

        </form>
    </div>
</section>
@endsection
