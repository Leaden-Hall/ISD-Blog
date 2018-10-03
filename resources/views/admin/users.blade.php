@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   
   <div class="col-md-12">
   <div class="card data-tables">
      <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
         <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
            <a href="{!! url('admin/addUser'); !!}" class="btn btn-success btn-wd">Add User</a>
         </div>
         <div class="fresh-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>username</th>
                     <th>email</th>
                     <th>Role</th>
                     <th>Active Status</th>
                     <th class="disabled-sorting text-right">Delete</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>Id</th>
                     <th>username</th>
                     <th>email</th>
                     <th>Role</th>
                     <th>Active Status</th>
                     <th class="disabled-sorting text-right">Delete</th>
                  </tr>
               </tfoot>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>Tiger Nixon</td>
                     <td>Nixon@gmail.com</td>
                     <td>Admin</td>
                     <td>
                        <input type="checkbox" checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="">
                        <span class="toggle"></span>
                     </td>
                     <td class="text-right">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                     </td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>System Architect</td>
                     <td>Edinburgh@gm.vn</td>
                     <td>User</td>
                     <td>
                        <input type="checkbox" checked="" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="">
                        <span class="toggle"></span>
                     </td>
                     <td class="text-right">
                        <a  onclick="sweet()"  class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script>
	
	function sweet() {
            swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-info btn-fill",
                confirmButtonText: "Yes, delete it!",
                cancelButtonClass: "btn btn-danger btn-fill",
                closeOnConfirm: false,
            }, function() {
                swal("Deleted!", "This record has been deleted.", "success");
            });
    }
</script>

@endsection