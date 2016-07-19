@extends('layouts.master')
@section('title')
Add Notice
@endsection
@section('content')
<div class="container height_corr">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Notice Board</div>

                <div class="panel-body">
			         @include('common.errors')
					<form action="{{url('notice/update')}}" method="POST" enctype="multipart/form-data">
						<input type="hidden" value="{!! csrf_token() !!}" name="_token">
					  <div class="form-group">
					    <label for="name">Heading of Notice</label>
					   <!-- <input type="text" class="form-control" id="name" placeholder="Notice Header"> -->
					    <textarea type="text" class="form-control" style="width:50%" name="name" value="{!! $notice->name !!}" placeholder="Notice Header">{!! $notice->name !!}</textarea>
					  </div>
					  <div class="form-group">
					    <label for="input_file">File input</label>
					    <input type="file" name="input_file" value="{!! $notice->input_file !!}">
					  </div>
					  <button type="submit" class="btn btn-default">Update Notice</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection