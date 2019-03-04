@extends('admin.admin')

@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action="" enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-4">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            Primary Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <h1>enter the infornation aut parfun</h1>
              <input style="    margin-bottom: 3%; margin-top: 6%;" name="name" class="form-control" placeholder="Enter the name" value="">
              <input style="    margin-bottom: 3%; margin-top: 6%;"  name="price" class="form-control" placeholder="Enter the price" value="">
              <select name="type" class="form-control">
                <option value="men">men</option>
                <option value="woman">woman</option>
                <option value="child">child</option>
              </select>
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
