@extends('admin.admin')



@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action="" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-12">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            post Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <label>Text Input with Placeholder</label>
              <input name="imagHeader" class="form-control" placeholder="Enter text" value="{{$p->imagHeader}}">
              <textarea name="imagContant" class="form-control" placeholder="Enter text" value="{{$p->imagContant}}">{{$p->imagContant}}</textarea>
              <input type="file" value="upload" name="photo" class="btn btn-primary">
          </div>
        </div>

        <div class="panel-footer">
          <button type="submit" class="btn btn-outline btn-primary">Primary</button>
        </div>
    </div>
</div>

</form>
@endsection
