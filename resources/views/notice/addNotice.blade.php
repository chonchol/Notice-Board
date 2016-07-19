@extends('layouts.master')
@section('title')
Add Notice
@endsection
@section('content')

<div class="container height_corr">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	@include('common.errors')
        	@if(Session::has('flash_message'))
				<div class="alert alert-info">{{ Session::get('flash_message') }}</div>
			@endif
            <div class="panel panel-default" style="margin-top: 9%;">

                <div class="panel-heading">Notice Board</div>

                <div class="panel-body">
			         
					<form action="{{url('notice/save')}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
					  <div class="form-group">
					    <label for="name">Heading of Notice</label>
					   <!-- <input type="text" class="form-control" id="name" placeholder="Notice Header"> -->
					    <textarea type="text" class="form-control" style="width:50%" name="name" placeholder="Notice Header"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="input_file">File input</label>
					    <input type="file" name="input_file">
					  </div>
					  <button type="submit" class="btn btn-success">Add Notice</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection