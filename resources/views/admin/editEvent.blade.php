@extends('admin/admin_app')

@section('admin_content')

<div class="container-fluid">
   <div class="col-md-10">
      {!! Form::open(array('url' => 'admin/event/update/'.$event->id, 'method' => 'PUT', 'id' => '', 'enctype' => "multipart/form-data")) !!}

         <div class="card ">
            <div class="card-header ">
               <h4 class="card-title text-center">Event Form</h4>
            </div>
            <div class="card-body ">
               <div class="form-group has-label">
                  {{Form::label('title','Title', array('class' => '')) }}
                  {{Form::text('title',$event->title, array('class' => 'form-control', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter title here...')) }}
               </div>
               <div class="form-group has-label">
                  {{Form::label('summary','Summary', array('class' => '')) }}
                  {{Form::text('summary',$event->summary, array('class' => 'form-control', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter summary here...')) }}
               </div>
               <div class="form-group has-label">
                  {{Form::label('banner','Banner', array('class' => '')) }}
                  {{Form::file('banner', array('class' => 'form-control', 'onchange' => 'readURL(this);', 'accept' => 'image/*')) }}
                  <img style="padding-left: 230px; padding-top: 7px;" id="blah" src="{{asset('/storage/assets/admin/img/avatars/'.$event->banner)}}" width="500" height="200" alt="Your image" />
               </div>
               <div class="form-group has-label">
                  {{Form::label('content','Content', array('class' => '')) }}
                  {{Form::textarea('content',$event->content, array('class' => 'form-control', 'required' => 'true', 'placeholder' => 'Enter content here...')) }}
               </div>
            </div>
            <div class="card-footer text-center">
               {{Form::submit('Update', array('class' => 'btn btn-info btn-fill btn-wd')) }}
            </div>
         </div>
      </form>
   </div>
</div>

<script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection