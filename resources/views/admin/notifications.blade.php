@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
      <div class="card data-tables">
         <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
            <div class="toolbar">
               <!--        Here you can write extra buttons/actions for the toolbar              -->
               <a href="{!! url('admin/addNotification'); !!}" class="btn btn-success btn-wd">Add notification</a>
            </div>
            <div class="fresh-datatables">
               <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                     <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>start date</th>
                        <th class="disabled-sorting text-right">Delete</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>start date</th>
                        <th class="disabled-sorting text-right">Delete</th>
                     </tr>
                  </tfoot>
                  <tbody>
                     <tr>
                        <td>daily meeting</td>
                        <td>If you’re serious about making this content marketing thing work for your business then you’ll need to give it some regular attention.</td>
                        <td>20/09/2018</td>
                        <td class="text-right">
                           <a onclick="demo.showSwal('warning-message-and-confirmation')" class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>daily meeting</td>
                        <td>If you’re serious about making this content marketing thing work for your business then you’ll need to give it some regular attention.</td>
                        <td>20/09/2018</td>
                        <td class="text-right">
                           <a onclick="demo.showSwal('warning-message-and-confirmation')" class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection