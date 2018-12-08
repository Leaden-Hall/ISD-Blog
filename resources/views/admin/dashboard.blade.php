@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-lg-3 col-sm-6">
      <div class="card card-stats">
         <div class="card-body ">
            <div class="row">
               <div class="col-5">
                  <a href="{!! url('admin/users'); !!}">
                     <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-circle-09 text-warning"></i>
                     </div>
                  </a>
               </div>
               <div class="col-7">
                  <div class="numbers">
                     <h5 class="card-title">User management</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer ">
            <hr>
            <div class="stats">
               <i class="fa fa-refresh"></i> 100 users
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-sm-6">
      <div class="card card-stats">
         <div class="card-body ">
            <div class="row">
               <div class="col-5">
                  <a href="{!! url('admin/posts'); !!}">
                     <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-paper-2 text-success"></i>
                     </div>
                  </a>
               </div>
               <div class="col-7">
                  <div class="numbers">
                     <h5 class="card-title">Post management</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer ">
            <hr>
            <div class="stats">
               <i class="fa fa-refresh"></i> 50 posts
            </div>
         </div>
      </div>
   </div>
   
   <div class="col-lg-3 col-sm-6">
      <div class="card card-stats">
         <div class="card-body ">
            <div class="row">
               <div class="col-5">
                  <a href="{!! url('admin/events'); !!}">
                     <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-tag-content text-primary"></i>
                     </div>
                  </a>
               </div>
               <div class="col-7">
                  <div class="numbers">
                     <h5 class="card-title">Events management</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer ">
            <hr>
            <div class="stats">
               <i class="fa fa-refresh"></i> 20 events
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-sm-6">
      <div class="card card-stats">
         <div class="card-body ">
            <div class="row">
               <div class="col-5">
                  <a href="{!! url('admin/announcements'); !!}">
                     <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-notification-70 text-secondary"></i>
                     </div>
                  </a>
               </div>
               <div class="col-7">
                  <div class="numbers">
                     <h5 class="card-title">Announce management</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer">
            <hr>
            <div class="stats">
               <i class="fa fa-refresh"></i> 20 notifications
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-3 col-sm-6">
      <div class="card card-stats">
         <div class="card-body ">
            <div class="row">
               <div class="col-5">
                  <a href="{!! url('admin/reports'); !!}">
                     <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-notes text-dark"></i>
                     </div>
                  </a>
               </div>
               <div class="col-7">
                  <div class="numbers">
                     <h5 class="card-title">Report management</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer ">
            <hr>
            <div class="stats">
               <i class="fa fa-refresh"></i> 20 reports
            </div>
         </div>
      </div>
   </div>
</div>

@endsection