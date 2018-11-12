@extends('admin/admin_app')

@section('admin_content')

<div class="col-md-12">
   {{-- <form id="TypeValidation" class="form-horizontal" action="" method=""> --}}
   {!! Form::open(array('url' => 'admin/announcement/create', 'method' => 'POST', 'id' => 'TypeValidation', 'class' => 'form-horizontal')) !!}
      <div class="card " >
         <div class="card-header ">
            <h3 class="card-title" align="center">Announcement form</h3>
            <br>
         </div>
         <div class="card-body ">
            <div class="row">
               {{-- <label class="col-sm-2 col-form-label">Title</label> --}}
               {{Form::label('title','Title', array('class' => 'col-sm-2 col-form-label')) }}
               <div class="col-sm-7">
                  <div class="form-group">
                     {{-- <input class="form-control notiTitle" id="notiTitle" type="text" name="notiTitle"   placeholder="Enter title here..." /> --}}
                     {{Form::text('title',null, array('class' => 'form-control notiTitle', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter title here...')) }}

                  </div>
               </div>
            </div>
            <div class="row">
               {{-- <label class="col-sm-2 col-form-label">Content</label> --}}
               {{Form::label('content','Content', array('class' => 'col-sm-2 col-form-label')) }}
               <div class="col-sm-7">
                  <div class="form-group">
                     {{-- <textarea name="notiContent" class="form-control" id=""  cols = "64" rows="5" placeholder="Enter content here..."></textarea> --}}
                     {{Form::textarea('content',null, array('class' => 'form-control', 'required' => 'true', 'placeholder' => 'Enter content here...')) }}
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer text-right" style="padding-right: 100px;">
            {{-- <button style="position: relative; top: -110px;" type="submit" class="btn btn-info" onclick="demo.showSwal('success-message')">Add</button> --}}
            {{Form::submit('Add', array('class' => 'btn btn-info', 'style'=> 'position: relative; top: -110px;')) }}

            {{-- <a style="position: relative; top: -110px; color: white; " type="submit" class="btn btn-info" onclick="demo.showSwal('success-message')">Add</a> --}}
         </div>
      </div>
   {{-- </form> --}}
</div>

@endsection