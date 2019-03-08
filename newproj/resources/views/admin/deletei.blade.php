@extends('admin.admin')


@section('content')

<form method="POST" action="">
  {{csrf_field()}}

<div class="col-lg-4">
    <div class="panel panel-red">
        <div class="panel-heading">
            Red Panel
        </div>
        <div class="panel-body">
          <div class="form-group">
              <label>Are You Sure You Wanna Delete is !!??</label>
              <textarea name="cont" class="form-control" placeholder="Enter text" value="{{$p->cont}}">{{$p->cont}}</textarea>

          </div>
        </div>

        <div class="panel-footer">
              <button type="submit" class="btn btn-danger btn-primary">Primary</button>
        </div>
    </div>
    <!-- /.col-lg-4 -->
</div>
</form>
@endsection
