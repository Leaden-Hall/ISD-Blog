@extends('admin/admin_app')

@section('admin_content')

<div class="row">
   <div class="col-md-12">
      <div class="card table-big-boy">
         <div class="card-header ">
            <h4 class="card-title">Post Table</h4>
            <p class="card-category">A table for post management</p>
            <br />
         </div>
         <div class="card-body table-full-width">
            <table class="table table-bigboy">
               <thead>
                  <tr>
                     <th class="text-center">Image</th>
                     <th>Post Title</th>
                     <th class="th-description">Summary</th>
                     <th class="text-right">Date</th>
                     <th class="disabled-sorting text-right">Confirmation</th>
                     <th class="disabled-sorting text-right">Delete</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($posts as $post)
                  <tr>
                     <td>
                        <div class="img-container">
                           @php ($image = \App\PostImage::where('posts_id', $post->id)->value('url'))
                           <img src="{{asset('/storage/assets/admin/img/'.$image)}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="{!! url('admin/blogContent'); !!}">{{$post->title}}</a>
                     </td>
                     <td>
                        {{$post->summary}}
                     </td>
                     <td class="td-number" style="font-weight:bold;">{{date('d/m/Y', strtotime($post->created_at))}}</td>
                     <td>
                        @if($post->posts_status == 1)
                           @php ($value1 = 1)
                           @php ($value2 = 0)
                        @elseif($post->posts_status == 2)
                           @php ($value1 = 0)
                           @php ($value2 = 2)
                        @elseif($post->posts_status == 0)
                           @php ($value1 = 0)
                           @php ($value2 = 0)
                        @endif

                        <div class="btn-group" id="status" data-toggle="buttons">
                           @if($post->posts_status == 1)
                              <label class="btn btn-default btn-on btn-xs active">
                           @else
                              <label class="btn btn-default btn-on btn-xs">
                           @endif
                           <input type="radio" value="$value1" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/1'); !!}'" checked><i class="fa fa-check fa-lg"></i></label>

                           @if($post->posts_status == 2)
                              <label class="btn btn-default btn-off btn-xs active">
                           @else
                              <label class="btn btn-default btn-off btn-xs">
                           @endif
                           <input type="radio" value="$value2" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                           
                     </td>
                     <td class="">
                        {{-- <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a> --}}
                        <a id="postDelete" data-id="{{$post->id}}"  class="btn btn-link btn-warning"><i class="fa fa-trash fa-2x" style="padding-top: 35px;"></i></a>
                     </td>
                  </tr>
                  @endforeach
                  {{$posts->links()}}
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

@endsection