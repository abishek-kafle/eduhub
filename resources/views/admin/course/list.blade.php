@extends('admin.layout.master')

@section('content')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="course" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="message-text" name="name">
                    </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Description</label>
                    <textarea class="form-control ckeditor" id="message-text" name="description"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">File</label>
                    <input type="text" class="form-control" id="message-text" name="file">
                  </div>

                  <div class="form-group">
                    <label for="class" class="col-form-label">Class</label>
                    <select name="class" id="class" class="form-control">
                        @foreach ($standards as $standard)
                            <option value="{{$standard->name}}">{{$standard->name}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="from-group">
                      <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="breadcrumbs">
    @if (session('status'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="col-sm-3">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Courses</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-1">
        <div class="float-left">
            <div class="container page-title">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add</button>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('home')}}">Dashboard</a></li>
                    <li class="active">Courses</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<br>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>File</th>
                <th>Class</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->name}}</td>
                            <td>{!!$course->description!!}</td>
                            <td>{{$course->link}}</td>
                            <td>{{$course->class}}</td>
                            <td><a href="course/{{$course->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                            <td>
                                <form action="{{action('App\Http\Controllers\Admin\CourseController@destroy',$course->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/lib/data-table/datatables-init.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
    } );
</script>
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>

@endsection
