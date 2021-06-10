@extends('admin.layout.master')

@section('content')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="member">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="message-text" name="name">
                    </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="message-text" name="email">
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
                <h1>Members</h1>
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
                    <li><a href="{{url('/')}}">Dashboard</a></li>
                    <li class="active">Members</li>
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
                <th>Email</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{$member->name}}</td>
                            <td>{{$member->email}}</td>
                            <td><a href="member/{{$member->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                            <td>
                                <form action="{{action('App\Http\Controllers\Admin\MemberController@destroy',$member->id)}}" method="POST">
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
