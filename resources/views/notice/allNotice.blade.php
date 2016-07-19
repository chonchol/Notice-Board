@extends('layouts.master')
@section('title')
@endsection
@section('content')
<div class="container height_corr">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          @include('common.errors')
          @if(Session::has('flash_message'))
            <div class="alert alert-danger">{{ Session::get('flash_message') }}</div>
          @endif
            <div class="panel panel-default">
                <div class="panel-heading">Notice Board</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12">
                      @if(count($notices))
                <table aria-describedby="tbl-notice-file_info" role="grid" id="example" class="table table-bordered table-striped table-condensed dataTable no-footer">
                  <thead>
                    <tr role="row" style="background-color:#ccc">
                      <th aria-label="Heading: activate to sort column ascending" style="width: 742px;" colspan="1" rowspan="1" aria-controls="tbl-notice-file" tabindex="0" class="sorting" width="68%">Heading</th>
                      <th aria-label="Published On: activate to sort column ascending" aria-sort="descending" style="width: 233px;" colspan="1" rowspan="1" aria-controls="tbl-notice-file" tabindex="0" class="sorting_desc" width="22%">Published On</th>
                      <th aria-label="Operation: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="tbl-notice-file" tabindex="0" class="sorting" width="10%">Operation</th>
                      <th aria-label="Operation: activate to sort column ascending" style="text-align: center;" colspan="1" rowspan="1" aria-controls="tbl-notice-file" tabindex="0" class="sorting">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($notices as $notice)
                     <tr class="even" role="row">
                          <td>{{$notice->name}}</td>
                          <td class="sorting_1">{{$notice->created_at}}</td>
                          <td style="text-align: center;">
                              <a href="{{url('file')}}/{{$notice->input_file}}" class="btn btn-primary btn-xs view_btn">View</a>
                          </td>
                          <td style="width:13%;text-align: center;">
                           <a class="btn btn-danger btn-xs" href="{{route('deleteNotice',$notice->id)}}">Delete</a></td>
                     </tr>
                  @endforeach
                   </tbody>
                </table>
                @endif
                </div>
                </div>
                {{$notices->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection