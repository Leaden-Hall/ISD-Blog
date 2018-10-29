@extends('admin/admin_app')

@section('admin_content')

<div class="container-fluid">
   <div class="col-md-10">
      {{-- <form id="" action="" method=""> --}}
      {!! Form::open(array('url' => 'admin/event/create', 'method' => 'POST', 'id' => '', 'enctype' => "multipart/form-data")) !!}

         <div class="card ">
            <div class="card-header ">
               <h4 class="card-title text-center">Event Form</h4>
            </div>
            <div class="card-body ">
               <div class="form-group has-label">
                  {{-- <label>Title </label> --}}
                  {{Form::label('title','Title', array('class' => '')) }}
                  {{-- <input class="form-control" name="title" type="text" required="true" placeholder="Enter title here..." /> --}}
                  {{Form::text('title',null, array('class' => 'form-control', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter title here...')) }}
               </div>
               <div class="form-group has-label">
                  {{-- <label>Summary</label> --}}
                  {{Form::label('summary','Summary', array('class' => '')) }}
                  {{-- <input class="form-control" name="summary" type="text" placeholder="Enter summary here..."/> --}}
                  {{Form::text('summary',null, array('class' => 'form-control', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter summary here...')) }}
               </div>
               <div class="form-group has-label">
                  {{-- <label>Banner</label> --}}
                  {{Form::label('banner','Banner', array('class' => '')) }}
                  {{-- <input onchange="readURL(this);" class="form-control" type="file" name="banner"  accept="image/*"/> --}}
                  {{Form::file('banner', array('class' => 'form-control', 'onchange' => 'readURL(this);', 'accept' => 'image/*')) }}
                  <img style="padding-left: 230px; padding-top: 7px;" id="blah" src="{{asset('/storage/assets/admin/img/alt.png')}}" alt="Your image" />
               </div>
               <div class="form-group has-label">
                  {{-- <label>Content</label> --}}
                  {{Form::label('content','Content', array('class' => '')) }}
                  {{-- <textarea name="content" class="form-control" id=""  cols = "64" rows="5" placeholder="Enter content here..."></textarea> --}}
                  {{Form::textarea('content',null, array('class' => 'form-control', 'required' => 'true', 'placeholder' => 'Enter content here...')) }}
               </div>
            </div>
            <div class="card-footer text-center">
               {{-- <button type="submit" class="btn btn-info btn-fill btn-wd">Add</button> --}}
               {{Form::submit('Add', array('class' => 'btn btn-info btn-fill btn-wd')) }}
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