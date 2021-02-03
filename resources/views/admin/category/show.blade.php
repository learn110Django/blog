@extends('admin.layouts.app')

@section('headsection')
 
<link rel="stylesheet" href="{{url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">  
@endsection
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Category</h3>
  <a href="{{route('category.create')}}" class="float-right btn btn-primary btn-md">Add new</a>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Category name</th>
        <th>Slug</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
          @foreach ($category as $cat)
          <tr>
          <td>{{$loop->index+1}}</td>
          <td>{{$cat->name}}</td>
            <td>{{$cat->slug}}</td>
            <td> <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
            <td> 

              <form action="{{route('category.destroy',$cat->id)}}" method="POST" style="display: none" id="delete-id-{{$cat->id}}">
                  @csrf
                  @method('DELETE')
              </form>
             <a href="" 
             onclick=
             "if(confirm('Are you sure to delete it?')){
             event.preventDefault();
             document.getElementById('delete-id-{{$cat->id}}').submit();}
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
        <th>Category name</th>
        <th>Slug</th>
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