@extends('admin.layouts.app')
@section('headsection')
   <link rel="stylesheet" href="{{url('backend/plugins/select2/css/select2.min.css')}}">
   <link rel="stylesheet" href="{{url('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{url('backend/css/simage.css')}}">
   <link rel="stylesheet" href="{{url('backend/css/gallry.css')}}">
  
    
  @endsection
@section('content')

 <div class="row" style="margin-top: 30px;margin-left:30px;">

      <div class="col-lg-8">
        @include('includes.error_msg')
      <form role="form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
             <div class="card-body">

               <div class="form-group">
                 <label for="title">Post Title</label>
                 <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
               </div>



               <div class="form-group">
                 <label for="slug">Post slug</label>
                 <input type="text" class="form-control" id="slug" name="slug" placeholder="post slug">
               </div>

             

       
               <div class="form-group">
                <label class="control-label">Upload File</label>
                <div class="preview-zone hidden">
                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <div><b>Preview</b></div>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-danger btn-xs remove-preview">
                          <i class="fa fa-times"></i> Reset This Form
                        </button>
                      </div>
                    </div>
                    <div class="box-body"></div>
                  </div>
                </div>
                <div class="dropzone-wrapper">
                  <div class="dropzone-desc">
                    <i class="glyphicon glyphicon-download-alt"></i>
                    <p>Choose an image file or drag it here.</p>
                  </div>
                  <input type="file"  class="dropzone" name="image">
                </div>
              </div>     

               <input type="file" id="files" name="files[]" multiple><br/>

           
               <div class="form-group">
                <label>Category</label>
                  <select class="select2bs4 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a Category" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                  @foreach ($categories as $cat)
                   <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
                  </select>
                </div>


                <div class="form-group">
                  <label>Tag</label>
                  <select class="select2bs4 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select a Tag" style="width: 100%;"  tabindex="-1" aria-hidden="true">
                    @foreach ($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                   @endforeach
                  </select>
                </div>

                <div class="form-check">
                  <input type="checkbox"  class="form-check-input" name="status" value="1" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Publish</label>
                </div>





                <div class="box" style="margin-top:20px;">
                  <div class="box-header">
                    <h3 class="box-title">Write Post Body Here
                      <small>Simple and fast</small>
                    </h3>
                    <!-- tools box -->

                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
                    </div>
                  </div>

               <div class="form-group" style="margin-top: 30px">
                <button type="submit" class="btn btn-primary">Submit</button>
               <a  href="{{route('post.index')}}"class="btn btn-primary btn-md" style="margin-left: 10px;">Back</a>
              </div>
           </div>

          </form>
       </div>
      <div class="col-lg-4">
        <div id="selectedFiles"></div>
      </div>
 </div>

 @section('footersection')
  
    <script src="{{  asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script src="{{url('backend/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{url('backend/js/simage.js')}}"></script>
    <script src="{{url('backend/js/gallry.js')}}"></script>

        <script>
          $(function () {
           CKEDITOR.replace('editor1');

         });
         
          $('.select2').select2();
            $('.select2bs4').select2({
               theme: 'bootstrap4'
             });
             
        </script>

  @endsection
@endsection
