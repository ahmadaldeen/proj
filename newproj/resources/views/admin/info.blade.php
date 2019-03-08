@extends('admin.admin')

@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action=""  enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-4">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            Add Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <h1>enter the infornation aut parfun</h1>
              <input style="margin-bottom: 3%; margin-top: 6%;"  name="cont" class="form-control" placeholder="Enter the information" value="">
          </div>
        </div>

        <div class="panel-footer">
          <button type="submit" class="btn btn-outline btn-primary">Save</button>
        </div>
    </div>
</div>
</form>
@endsection
