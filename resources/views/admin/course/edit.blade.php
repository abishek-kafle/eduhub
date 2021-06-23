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
              <form action="{{action('App\Http\Controllers\Admin\CourseController@update',$course->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')

                <div class="form-group">
                    <label for="message-text" class="col-form-label">Name</label>
                    <input type="text" class="form-control" id="message-text" name="name" value="{{$course->name}}">
                </div>

                  <div class="form-group has-success">
                      <label for="cc-name" class="control-label mb-1">Description</label>
                      <textarea id="cc-name" name="description" class="form-control ckeditor cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">{!!$course->description!!}</textarea>
                      <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">File</label>
                    <p>Old file : {{$course->link}}</p>
                    <input type="hidden" value="{{$course->link}}" name="oldfile">
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
