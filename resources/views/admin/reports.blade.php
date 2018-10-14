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
                        <th>Number</th>
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>Number</th>
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </tfoot>
                  <tbody>
                     @foreach($reports as $report)
                     <tr>
                        <td class="counterCell"></td>
                        <td>{{$report->post->title}}</td>
                        <th>{{$report->user->username}}</th>
                        <td><a id="reportContent" data-id="{{$report->content}}" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td>
                        <td>
                           @if($report->report_status == 1)
                           <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs active">
                              <input type="radio" value="1" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/1'); !!}'" checked><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @elseif($report->report_status == 2)
                              <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/1'); !!}'"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs active">
                              <input type="radio" value="2" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @elseif($report->report_status == 0)
                              <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/1'); !!}'"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/report/status/'.$report->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @endif
                        </td>
                     </tr>
                     @endforeach
                     {{$reports->links()}}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection