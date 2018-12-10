@extends('admin/admin_app')

@section('admin_content')

<div class="col-md-12">
   {!! Form::open(array('url' => 'admin/announcement/update/'.$announcement->id, 'method' => 'PUT', 'id' => 'TypeValidation', 'class' => 'form-horizontal')) !!}
      <div class="card " >
         <div class="card-header ">
            <h3 class="card-title" align="center">Announcement form</h3>
            <br>
         </div>
         <div class="card-body ">
            <div class="row">
               {{Form::label('title','Title', array('class' => 'col-sm-2 col-form-label')) }}
               <div class="col-sm-7">
                  <div class="form-group">
                     {{Form::text('title',$announcement->title, array('class' => 'form-control notiTitle', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter title here...')) }}

                  </div>
               </div>
            </div>
            <div class="row">
               {{Form::label('content','Content', array('class' => 'col-sm-2 col-form-label')) }}
               <div class="col-sm-7">
                  <div class="form-group">
                     {{Form::textarea('content',$announcement->content, array('class' => 'form-control', 'required' => 'true', 'placeholder' => 'Enter content here...')) }}
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer text-right" style="padding-right: 100px;">
            {{Form::submit('Update', array('class' => 'btn btn-info', 'style'=> 'position: relative; top: -110px;')) }}
         </div>
      </div>
   </form>
</div>

@endsection