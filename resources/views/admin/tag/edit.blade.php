@extends('admin.layouts.app')

@section('content')
<div class="row" style="margin-top: 30px;margin-left:30px;">

    <div class="col-lg-8">
         
        <form role="form" action="{{route('tag.update',$tags->id)}}" method="POST">
            <div class="card-body">
              @include('includes.error_msg')
              @csrf
              @method('PUT')
            <div class="form-group">
                <label for="name">category name</label>
                <input type="text" class="form-control" id="name" value="{{$tags->name}}" name="name" placeholder="Enter category name">
            </div>

            <div class="form-group">
                <label for="slug">slug</label>
                <input type="text" class="form-control" id="slug"  name="slug" value="{{$tags->slug}}" placeholder="Enter slug">
            </div>
            
            <div>
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
            <a   href="{{route('tag.index')}}"class="btn btn-primary btn-md">Back</a>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>  

@endsection