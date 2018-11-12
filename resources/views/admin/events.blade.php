@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
      @if($count == 0)
         <div class="alert alert-info">
            <span><b> Notify - </b> No record exists in this table</span>
         </div>
      @else
      
      <div class="card table-big-boy">
         <div class="card-header ">
            <a href="{!! url('admin/addEvent'); !!}" class="btn btn-success btn-wd">Add Event</a>
            <br />
         </div>
         <div class="card-body table-full-width">
            <table class="table table-bigboy">
               <thead>
                  <tr>
                     <th class="text-center">BANNER</th>
                     <th class="text-center">TITLE</th>
                     <th class="text-center th-description">SUMMARY</th>
                     <th class="text-center">CONTENT</th>
                     <th class="disabled-sorting text-center">DATE</th>
                     <th class="disabled-sorting text-center">Edit</th>
                     <th class="disabled-sorting text-center">Delete</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($events as $event)
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/storage/images/events/'.$event->banner)}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <p class="text-primary" style="padding-top: 10px;">{{$event->title}} </p>
                     </td>
                     <td>
                        {{$event->summary}}
                     </td>

                     <td>
                        <a id="eventContent" data-id="{{$event->content}}" class="btn btn-link btn-info like">
                           <i class="fa fa-arrow-circle-right fa-lg"></i>
                        </a>
                     </td>

                     <td style="padding-top: 8px; font-weight:bold;">
                        {{date('d/m/Y', strtotime($event->created_at))}}
                     </td>

                     <td class="text-right">
                        <a href="{!! url('admin/event/edit/'.$event->id); !!}" class="btn btn-link btn-warning"><i class="fa fa-edit fa-2x" style="padding-top: 7px;"></i></a>
                     </td>

                     <td class="text-right">
                        <a id="eventDelete" data-id="{{$event->id}}" class="btn btn-link btn-warning"><i class="fa fa-trash fa-2x" style="padding-top: 35px;"></i></a>
                     </td>
                  </tr>
                  @endforeach
                  {{$events->onEachSide(1)->links()}}
               </tbody>
            </table>
         </div>
      </div>
      @endif
   </div>
</div>

@endsection