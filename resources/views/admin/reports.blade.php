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
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>Post name</th>
                        <th>Reporter</th>
                        <th>Reason</th>
                        <th class="disabled-sorting">Confirmation</th>
                     </tr>
                  </tfoot>
                  <tbody>
                     @foreach($reports as $report)
                     <tr>
                        <td>{!! \App\Post::where('id', $report->reported_posts_id)->value('title'); !!}</td>
                        <td>{!! \App\User::where('id', $report->reporter_id)->value('username'); !!}</td>
                        <td><a id="reportContent" data-id="{{$report->content}}" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td>
                        <td>                          
                           @if($report->report_status == 1)
                              @php ($value1 = 1)
                              @php ($value2 = 2)
                           @elseif($report->report_status == 2)
                              @php ($value1 = 2)
                              @php ($value2 = 2)
                           @elseif($report->report_status == 0)
                              @php ($value1 = 2)
                              @php ($value2 = 0)
                           @endif

                           <div class="btn-group" id="status" data-toggle="buttons">
                              @if($report->report_status == 1)
                                 <label class="btn btn-default btn-on btn-xs active">
                              @else
                                 <label class="btn btn-default btn-on btn-xs">
                              @endif
                              <input type="radio" value="$value1" onchange="changeReportStatus({!! $report->id !!}, 1)" checked><i class="fa fa-check fa-lg"></i></label>

                              @if($report->report_status == 0)
                                 <label class="btn btn-default btn-off btn-xs active">
                              @else
                                 <label class="btn btn-default btn-off btn-xs">
                              @endif
                              <input type="radio" value="$value2" onchange="changeReportStatus({!! $report->id !!}, 0)"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                        </td>
                     </tr>
                     @endforeach
                     {{$reports->onEachSide(1)->links()}}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection