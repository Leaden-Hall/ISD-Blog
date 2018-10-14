@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
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
                     <th class="disabled-sorting text-center">START DATE</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($events as $event)
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/avatars/'.$event->banner)}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <p class="text-primary" style="padding-top: 10px;">{{$event->title}} </p>
                     </td>
                     <td>
                        {{$event->summary}}
                     </td>
                     {{-- <td><a onclick="demo.showSwal('title-and-text')" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td> --}}

                     <td><a id="eventContent" data-id="{{$event->content}}" class="btn btn-link btn-info like"><i class="fa fa-arrow-circle-right fa-lg"></i></a></td>

                     <td style="padding-top: 58px; font-weight:bold;">
                        {{date('d-m-Y', strtotime($event->created_at))}}
                     </td>
                  </tr>
                  @endforeach
                  {{$events->links()}}
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

@endsection