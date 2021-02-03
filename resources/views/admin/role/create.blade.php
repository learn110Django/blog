@extends('admin.layouts.app')

@section('content')

    <div class="col-lg-8">
         
        <form role="form" action="{{route('role.store')}}" method="POST">
            <div class="row" style="margin-top: 30px;margin-left:30px;">
               
            <div class="card-body">
                @include('includes.error_msg')
             @csrf
            <div class="form-group">
                <label for="name">Roles</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role name">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
            <a   href="{{route('role.index')}}"class="btn btn-primary btn-md">Back</a>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>  

@endsection