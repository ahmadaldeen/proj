@extends('admin.admin')



@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action="" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-12">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            Update Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <label>Enter the information</label>
              <textarea name="cont" class="form-control" placeholder="Enter text" value="{{$p->cont}}">{{$p->cont}}</textarea>
          </div>
        </div>

        <div class="panel-footer">
          <button type="submit" class="btn btn-outline btn-primary">Update</button>
        </div>
    </div>
</div>

</form>
@endsection
