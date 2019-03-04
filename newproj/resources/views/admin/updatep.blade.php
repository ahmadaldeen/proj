@extends('admin.admin')



@section('content')
<!-- /.col-lg-4 -->
<form method="POST" action=""   enctype="multipart/form-data">
  {{csrf_field()}}
<div class="col-lg-12">
    <div class="panel panel-primary form-group">
        <div class="panel-heading">
            post Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <label>Text Input with Placeholder</label>
              <input name="name" class="form-control" placeholder="Enter text" value="{{$p->name}}">
              <input name="price" class="form-control" placeholder="Enter text" value="{{$p->price}}">
              <select name="type" class="form-control">
                <option value="men">men</option>
                <option value="woman">woman</option>
                <option value="child">child</option>
              </select>
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
