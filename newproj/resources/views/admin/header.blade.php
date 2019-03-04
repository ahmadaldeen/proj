@extends('admin.admin')

@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action=""  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-4">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            Primary Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <h1>enter the infornation aut parfun</h1>
              <input style="    margin-bottom: 3%; margin-top: 6%;"  name="header" class="form-control" placeholder="Enter the header" value="">
              <input style="    margin-bottom: 3%; margin-top: 6%;"  name="contant" class="form-control" placeholder="Enter the contant" value="">
          </div>
        </div>
        <div style="    margin-left: 2%;" class="form-group">
          <div class="form-group">
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
