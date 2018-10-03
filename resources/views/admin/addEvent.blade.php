@extends('admin/admin_app')

@section('admin_content')

<div class="container-fluid">
   <div class="col-md-10">
      <form id="LoginValidation" action="" method="">
         <div class="card ">
            <div class="card-header ">
               <h4 class="card-title text-center">Event Form</h4>
            </div>
            <div class="card-body ">
               <div class="form-group has-label">
                  <label>Title
                  </label>
                  <input class="form-control" name="title" type="text" required="true" placeholder="Enter title here..." />
               </div>
               <div class="form-group has-label">
                  <label>Summary
                  </label>
                  <input class="form-control" name="summary" type="text" placeholder="Enter summary here..."/>
               </div>
               <div class="form-group has-label">
                  <label>Banner
                  </label>
                  <input onchange="readURL(this);" class="form-control" type="file" name="banner"  accept="image/*"/>
                  <img style="padding-left: 230px;" id="blah" src="{{asset('/storage/assets/admin/img/alt.png')}}" alt="Your image" />
               </div>
               <div class="form-group has-label">
                  <label>Content
                  </label>
                  <textarea name="content" class="form-control" id=""  cols = "64" rows="5" placeholder="Enter content here..."></textarea>
               </div>
            </div>
            <div class="card-footer text-center">
               <button type="submit" class="btn btn-info btn-fill btn-wd">Add</button>
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