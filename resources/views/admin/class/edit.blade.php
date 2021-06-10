@extends('admin.layout.master')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <strong class="card-title">Edit Details</strong>
    </div>
    <div class="card-body">
      <!-- Credit Card -->
      <div id="pay-invoice">
          <div class="card-body">
              <div class="card-title">
                  <h3 class="text-center">Edit Details</h3>
              </div>
              <hr>
              <form action="{{action('App\Http\Controllers\Admin\ClassController@update',$class->id)}}" method="post">
                {{ csrf_field() }}
                @method('PUT')
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="message-text" name="name" value="{{$class->name}}">
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Semester</label>
                        <input type="text" class="form-control" id="message-text" name="semester" value="{{$class->semester}}">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
              </form>
          </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection
