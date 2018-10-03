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
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/blog-1.jpg')}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="blogContent.html">10 Things that all designers do</a>
                     </td>
                     <td>
                        Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.
                     </td>
                     <td class="td-number">30/08/2016</td>
                     <td>
                        <div class="btn-group" id="status" data-toggle="buttons">
                           <label class="btn btn-default btn-on btn-xs active">
                           <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                           <label class="btn btn-default btn-off btn-xs ">
                           <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                     </td>
                     <td class="">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/blog-2.jpg')}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="blogContent.html">Back to School Offer</a>
                     </td>
                     <td>
                        Design is not just what it looks like and feels like. Design is how it works.
                     </td>
                     <td class="td-number">17/07/2016</td>
                     <td>
                        <div class="btn-group" id="status" data-toggle="buttons">
                           <label class="btn btn-default btn-on btn-xs active">
                           <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                           <label class="btn btn-default btn-off btn-xs ">
                           <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                     </td>
                     <td class="">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/blog-3.jpg')}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="blogContent.html">First Dribbble Meetup in Romania</a>
                     </td>
                     <td>
                        A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.
                     </td>
                     <td class="td-number">23/06/2016</td>
                     <td>
                        <div class="btn-group" id="status" data-toggle="buttons">
                           <label class="btn btn-default btn-on btn-xs active">
                           <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                           <label class="btn btn-default btn-off btn-xs ">
                           <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                     </td>
                     <td class="">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/blog-4.jpg')}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="">How we created our startup with 0$</a>
                     </td>
                     <td>
                        A desk is a generally wooded piece of furniture and a type of useful table often used in a school or office setting for various academic or professional activities ...
                     </td>
                     <td class="td-number">30/06/2016</td>
                     <td>
                        <div class="btn-group" id="status" data-toggle="buttons">
                           <label class="btn btn-default btn-on btn-xs active">
                           <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                           <label class="btn btn-default btn-off btn-xs ">
                           <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                     </td>
                     <td class="">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="img-container">
                           <img src="{{asset('/storage/assets/admin/img/blog-1.jpg')}}" alt="...">
                        </div>
                     </td>
                     <td class="td-name">
                        <a href="">To use or not to use Bootstrap</a>
                     </td>
                     <td>
                        The Office Chair adapts naturally to virtually every body and is a permanent fixture.
                     </td>
                     <td class="td-number">10/05/2016</td>
                     <td>
                        <div class="btn-group" id="status" data-toggle="buttons">
                           <label class="btn btn-default btn-on btn-xs active">
                           <input type="radio" value="1" name="multifeatured_module[module_id][status]" checked="checked"><i class="fa fa-check fa-lg"></i></label>
                           <label class="btn btn-default btn-off btn-xs ">
                           <input type="radio" value="0" name="multifeatured_module[module_id][status]"><i class="fa fa-times fa-lg"></i></label>
                        </div>
                     </td>
                     <td class="">
                        <a onclick="demo.showSwal('warning-message-and-confirmation')"  style="padding-top: 43px;" class="btn btn-link btn-warning delete"><i class="fa fa-trash fa-2x"></i></a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

@endsection