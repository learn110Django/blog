@extends('admin.layouts.app')

@section('content')

    <div class="col-lg-8">
         
        <form role="form" action="{{route('tag.store')}}" method="POST">
            <div class="row" style="margin-top: 30px;margin-left:30px;">
               
            <div class="card-body">
                @include('includes.error_msg')
             @csrf
            <div class="form-group">
                <label for="name">Tag title</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag name">
            </div>

            <div class="form-group">
                <label for="slug">Tag slug</label>
                <input type="text" class="form-control" id="slug"  name="slug" placeholder="Enter slug">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
            <a   href="{{route('tag.index')}}"class="btn btn-primary btn-md">Back</a>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>  

@endsection