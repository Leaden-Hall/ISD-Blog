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
                     <th>username</th>
                     <th>email</th>
                     <th>Role</th>
                     <th>Active Status</th>
                     <th class="disabled-sorting text-right">Delete</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>username</th>
                     <th>email</th>
                     <th>Role</th>
                     <th>Active Status</th>
                     <th class="disabled-sorting text-right">Delete</th>
                  </tr>
               </tfoot>
               <tbody>
                @foreach($users as $user)
                  <tr>
                     <td>{{$user->username}}</td>
                     <td>{{$user->email}}</td>
                     <td>{!! \App\Role::where('id', $user->roles_id)->value('title'); !!}</td>
                     
                     <td>
                        @if($user->user_status == 1)
                           <input type="checkbox" checked data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" onchange="changeUserStatus({!! $user->id !!})" >
                        @else
                           <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info" data-on-text="" data-off-text="" onchange="changeUserStatus({!! $user->id !!})" >
                        @endif
                        <span class="toggle" ></span> 
                     </td>
                     <td class="text-right">
                        <a id="userDelete" data-id="{{$user->id}}" class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                     </td>
                  </tr>
                  @endforeach
                  {{$users->onEachSide(1)->links()}}
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

@endsection