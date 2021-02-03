@extends('admin.layouts.app')

@section('headsection')
 
<link rel="stylesheet" href="{{url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">  
@endsection
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Post</h3>
  <a href="{{route('post.create')}}" class="float-right btn btn-primary btn-md">Add new</a>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Post title</th>
        <th>Slug</th>
        <th>Created at</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)
          <tr>
            {{-- html_entity_decode($text)  for remove the html tag from text--}}
            <td>{{$loop->index+1}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            {{-- @foreach(explode(',', $post->gallry) as $info)
              <option>{{ $info }}</option>
            @endforeach --}}
            <td>{{ $post->created_at }}</td>
          <td> <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
             <td> 

               <form action="{{route('post.destroy',$post->id)}}" method="POST" style="display: none" id="delete-id-{{$post->id}}">
                   @csrf
                   @method('DELETE')
               </form>
              <a href="" 
              onclick=
              "if(confirm('Are you sure to delete it?')){
              event.preventDefault();
              document.getElementById('delete-id-{{$post->id}}').submit();}
               else{
                event.preventDefault();
               }
              " 
              class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
              
            </td>
          </tr> 
          @endforeach
      </tbody>
      <tfoot>
      <tr>
        <th>S.No</th>
        <th>Post title</th>
        <th>Slug</th>
        <th>Created at</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection

@section('footersection')

<script src="{{url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>

@endsection