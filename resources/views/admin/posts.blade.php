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
                           {{-- <img src="{!! \App\PostImage::where('posts_id', $post->id)->value('url'); !!}" alt="..."> --}}
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="{!! url('admin/blogContent'); !!}">{{$post->title}}</a>
                     </td>
                     <td>
                        {{$post->summary}}
                     </td>
                     <td class="td-number">{{date('d-m-Y', strtotime($post->created_at))}}</td>
                     <td>
                        @if($post->posts_status == 1)
                           <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs active">
                              <input type="radio" value="1" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/1'); !!}'" checked><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @elseif($post->posts_status == 2)
                              <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/1'); !!}'"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs active">
                              <input type="radio" value="2" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @elseif($post->posts_status == 0)
                              <div class="btn-group" id="status" data-toggle="buttons">
                              <label class="btn btn-default btn-on btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/1'); !!}'"><i class="fa fa-check fa-lg"></i></label>
                              <label class="btn btn-default btn-off btn-xs ">
                              <input type="radio" value="0" name="" onchange="window.location.href='{!! url('admin/post/status/'.$post->id.'/2'); !!}'"><i class="fa fa-times fa-lg"></i></label>
                           </div>
                           @endif
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