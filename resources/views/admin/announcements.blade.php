@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
      @if($count == 0)
         <div class="alert alert-info">
            <span><b> Notify - </b> No record exists in this table</span>
         </div>
      @else
      
      <div class="card data-tables">
         
         <!-- start .flash-message -->
         <div class="flash-message">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
          @endforeach
        </div> <!-- end .flash-message -->

         <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
            <div class="toolbar">
               <!--        Here you can write extra buttons/actions for the toolbar              -->
               <a href="{!! url('admin/addAnnouncement'); !!}" class="btn btn-success btn-wd">Add announcement</a>
            </div>
            <div class="fresh-datatables">
               <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                     <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>start date</th>
                        <th class="disabled-sorting text-right">Edit</th>
                        <th class="disabled-sorting text-right">Delete</th>
                     </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>start date</th>
                        <th class="disabled-sorting text-right">Edit</th>
                        <th class="disabled-sorting text-right">Delete</th>
                     </tr>
                  </tfoot>
                  <tbody>
                     @foreach($announcements as $announcement)
                     <tr>
                        <td>{{$announcement->title}}</td>
                        <td>{{$announcement->content}}</td>
                        <td>{{date('d-m-Y', strtotime($announcement->created_at))}}</td>
                        <td class="text-right">
                           <a href="{!! url('admin/announcement/edit/'.$announcement->id); !!}" class="btn btn-link btn-warning"><i class="fa fa-edit fa-lg"></i></a>
                        </td>
                        <td class="text-right">
                           <a id="announDelete" data-id="{{$announcement->id}}" class="btn btn-link btn-warning"><i class="fa fa-trash fa-lg"></i></a>
                        </td>
                     </tr>
                     @endforeach
                     {{$announcements->onEachSide(1)->links()}}
                  </tbody>
               </table>
            </div>
         </div>
         @endif
      </div>
   </div>
</div>

@endsection