@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
      <div class="card data-tables">
         <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
            <div class="toolbar">
               <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="fresh-datatables">
               <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                     <tr>
                        <th>Id</th>
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>Id</th>
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </tfoot>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>The Modeling Instinct</td>
                        <th>Tim Sheehan</th>
                        <td><a onclick="demo.showSwal('title-and-text')" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td>
                        <td>
                           <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs active">
                              <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>The Modeling Instinct</td>
                        <th>Tim Sheehan</th>
                        <td><a onclick="demo.showSwal('title-and-text')" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td>
                        <td>
                           <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs active">
                              <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                           </div>
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