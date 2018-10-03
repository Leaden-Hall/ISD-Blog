@extends('admin/admin_app')

@section('admin_content')

<div class="col-md-12">
   <form id="TypeValidation" class="form-horizontal" action="" method="">
      <div class="card " >
         <div class="card-header ">
            <h3 class="card-title" align="center">Notification form</h3>
            <br>
         </div>
         <div class="card-body ">
            <div class="row">
               <label class="col-sm-2 col-form-label">Title</label>
               <div class="col-sm-7">
                  <div class="form-group">
                     <input class="form-control notiTitle" id="notiTitle" type="text" name="notiTitle"   placeholder="Enter title here..." />
                  </div>
               </div>
            </div>
            <div class="row">
               <label class="col-sm-2 col-form-label">Content</label>
               <div class="col-sm-7">
                  <div class="form-group">
                     <textarea name="notiContent" class="form-control" id=""  cols = "64" rows="5" placeholder="Enter content here..."></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer text-right" style="padding-right: 100px;">
            {{-- <button style="position: relative; top: -110px;" type="submit" class="btn btn-info" onclick="demo.showSwal('success-message')">Add</button> --}}

            <a style="position: relative; top: -110px; color: white; " type="submit" class="btn btn-info" onclick="demo.showSwal('success-message')">Add</a>
         </div>
      </div>
   </form>
</div>

@endsection