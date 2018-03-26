@extends('layout.app')

@section('title')
    Create New Article
@endsection

@section('main_content')
<form class="form-horizontal" method="POST" action="{{url('articles/create')}}">
            
            {{csrf_field()}}

            <div class="panel panel-default">
                <div class="panel-heading">Add New Article</div>
                <div class="panel-body">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter title" name="title">
    </div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="comment">Content</label>
  <div class="col-sm-10">
  <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
  </div>
</div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
                </div>
            </div>
</form>
@endsection