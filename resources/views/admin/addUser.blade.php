@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-8 ml-auto mr-auto">
      {{-- <form id="wizardForm" method="" action=""> --}}
      {!! Form::open(array('url' => 'admin/user/create', 'method' => 'POST', 'id' => 'wizardForm', 'enctype' =>   "multipart/form-data")) !!}

         <div class="card card-wizard">
            <div class="card-header ">
               <h3 class="card-title text-center">Blog member form</h3>
               <p class="card-category text-center">Each member is a great author</p>
            </div>
            <div class="card-body ">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link active" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">Account infor</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-selected="true">Personal infor</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-selected="true">Finish</a>
                  </li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                     <p class="text-center">Please give us your account information.</p>
                     <div class="row justify-content-center">
                        <div class="col-md-10 ">
                           <div class="form-group">
                              {{-- <label class="control-label username">Username</label> --}}
                              {{Form::label('username','Username', array('class' => 'control-label username')) }}
                              {{-- <input name="username" class="form-control" type="text" name="first_name" required="true" /> --}}
                              {{Form::text('username',null, array('class' => 'form-control', 'type' => 'text', 'required' => 'true')) }}
                           </div>
                        </div>
                        <div class="col-md-5 ">
                           <div class="form-group"> 
                              {{-- <label class="control-label pas">Password</label> --}}
                              {{Form::label('password','Password', array('class' => 'control-label password')) }}
                              {{-- <input name="pas" id="password" class="form-control" type="password" required /> --}}
                              {{Form::password('password', array('class' => 'form-control', 'type' => 'password', 'required' => 'true')) }}
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              {{-- <label class="control-label repas">Retype password</label> --}}
                              {{Form::label('password_confirmation','Retype password', array('class' => 'control-label retype')) }}
                              {{-- <input name="retype" id="confirm_password" class="form-control" type="password" required /> --}}
                              {{Form::password('password_confirmation', array('class' => 'form-control', 'type' => 'password', 'id' => 'confirm_password', 'required' => 'true')) }}
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              {{-- <label class="control-label">Email</label> --}}
                              {{Form::label('email','Email', array('class' => 'control-label')) }}
                              {{-- <input class="form-control" type="text" name="email" email="true" placeholder="ex: hello@gmail.com" /> --}}
                              {{Form::text('email',null, array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'ex: hello@gmail.com', 'required' => 'true', 'email' => 'true')) }}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel">
                     <h5 class="text-center">Please tell us more about yourself.</h5>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              {{-- <label class="control-label">Avatar</label> --}}
                              {{Form::label('avatar','Avatar', array('class' => 'control-label')) }}
                              {{-- <input class="form-control" type="file" name="avatar" /> --}}
                              {{Form::file('avatar', array('class' => 'form-control', 'accept' => 'image/*')) }}
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-5">
                           <div class="form-group">
                              {{-- <label class="control-label">Phone</label> --}}
                              {{Form::label('phone','Phone', array('class' => 'control-label')) }}
                              {{-- <input class="form-control" type="text" name="phone" /> --}}
                              {{Form::text('phone',null, array('class' => 'form-control', 'type' => 'text')) }}
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="form-group">
                              {{-- <label class="control-label">Gender</label> --}}
                              {{Form::label('gender','Gender', array('class' => 'control-label')) }}
                              {{-- <select class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                 <option value="id">Male</option>
                                 <option value="ms">Female</option>
                                 <option value="ca">Unknown</option>
                              </select> --}}
                              {{Form::select('Gender', ['M' => 'Male', 'F' => 'Female', 'U' => 'Unknown'], 'M', array('class' => 'selectpicker', 'data-style' => 'btn-default btn-outline', 'data-menu-style' => 'dropdown-blue'))}}
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <div class="form-group">
                              {{-- <label class="control-label">Role</label> --}}
                              {{Form::label('role','Role', array('class' => 'control-label')) }}
                              {{-- <select name="versions" class="selectpicker" data-title="Single Select" data-style="btn-default btn-outline" data-menu-style="dropdown-blue">
                                 <option selected="" disabled="">- Admin -</option>
                                 <option value="1.1">User</option>
                              </select> --}}
                              {{Form::select('role', ['1' => 'Admin', '2' => 'User'], '1', array('class' => 'selectpicker', 'data-style' => 'btn-default btn-outline', 'data-menu-style' => 'dropdown-blue'))}}
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
               {{-- <button type="button" class="btn btn-info btn-wd btn-finish pull-right" onclick="demo.showSwal('success-message')">Finish</button> --}}
               {{Form::submit('Finish', array('class' => 'btn btn-info btn-wd btn-finish pull-right')) }}

               <div class="clearfix"></div>
            </div>
         </div>
      {{-- </form> --}}
      {!! Form::close() !!}
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