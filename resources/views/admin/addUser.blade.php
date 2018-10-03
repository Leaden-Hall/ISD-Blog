@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-8 ml-auto mr-auto">
      <form id="wizardForm" method="" action="">
         <div class="card card-wizard">
            <div class="card-header ">
               <h3 class="card-title text-center">Blog member form</h3>
               <p class="card-category text-center">Each member is a great author</p>
            </div>
            <div class="card-body ">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">First Tab</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-selected="true">Second Tab</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-selected="true">Third Tab</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                     <p class="text-center">Please give us your account information.</p>
                     <div class="row justify-content-center">
                        <div class="col-md-10 ">
                           <div class="form-group">
                              <label class="control-label username">Username</label>
                              <input name="username" class="form-control" type="text" name="first_name" required="true" />
                           </div>
                        </div>
                        <div class="col-md-5 ">
                           <div class="form-group">
                              <label class="control-label pas">Password</label>
                              <input name="pas" id="password" class="form-control" type="password" name="first_name" required />
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="control-label repas">Retype password</label>
                              <input name="" id="confirm_password" class="form-control" type="password" name="last_name" required />
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">Email
                              </label>
                              <input class="form-control" type="text" name="email" email="true" placeholder="ex: hello@gmail.com" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel">
                     <h5 class="text-center">Please tell us more about yourself.</h5>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">Avatar
                              </label>
                              <input class="form-control" type="file" name="" />
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="control-label">Phone</label>
                              <input class="form-control" type="text" name="framework" />
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="control-label">Gender
                              </label>
                              <select class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                 <option value="id">Male</option>
                                 <option value="ms">Female</option>
                                 <option value="ca">Unknown</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              <label class="control-label">Role</label>
                              <select name="versions" class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                 <option selected="" disabled="">- Admin -</option>
                                 <option value="1.1">User</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab3" role="tabpanel">
                     <h2 class="text-center text-space">Yeah!
                        <br>
                        <small> Click on "
                        <b>Finish</b>" to let new member join our community</small>
                     </h2>
                  </div>
               </div>
            </div>
            <div class="card-footer text-center">
               <button type="button" class="btn btn-default btn-wd btn-back pull-left">Back</button>
               <button type="button" class="btn btn-info btn-wd btn-next pull-right">Next</button>
               <button type="button" class="btn btn-info btn-wd btn-finish pull-right" onclick="demo.showSwal('success-message')">Finish</button>
               <div class="clearfix"></div>
            </div>
         </div>
      </form>
   </div>
</div>


{{-- <script type="text/javascript">
    $(document).ready(function() {
        // Init Wizard
        // demo.initLBDWizard();
    });

    // $("#pas").validate();
    // $("#repas").validate();
    // $("#username").validate();
</script> --}}

@endsection