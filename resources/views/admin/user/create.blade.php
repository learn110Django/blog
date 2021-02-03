@extends('admin.layouts.app')

@section('content')

    <div class="col-lg-8">
         
        <form role="form" action="{{route('user.store')}}" method="POST">
            <div class="row" style="margin-top: 30px;margin-left:30px;">
               
            <div class="card-body">
                @include('includes.error_msg')
             @csrf
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter  name">
            </div>

            <div class="form-group">
                <label for="email">Email id</label>
                <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
            </div>
            
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password">
           </div>

           <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword"  name="cpassword" placeholder="Confirm your password">
         </div>
          
         <div class="form-group">
             <label for="">Assign Role</label>
           <div class="row"> 
             @foreach ($roles as $role)   
                <div class="col-lg-3"> 
                <div class="checkbox">
                        <label>
                            <input type="checkbox" name="role[]" id="" value="{{$role->id}}">
                            {{$role->name}}
                        </label>
                    </div>  
                </div>   
             @endforeach 
           </div>
        </div>  
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
            <a   href="{{route('user.index')}}"class="btn btn-primary btn-md">Back</a>
            </div>

        </form>
    </div>
    <div class="col-lg-4"></div>
</div>  

@endsection