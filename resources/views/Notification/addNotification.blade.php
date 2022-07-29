@extends('layout.master')
@section('title', 'Notification')
@section('parentPageTitle', 'Add Notification')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/dist/summernote.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop
@section('content')
    <div class="body_scroll">

        <div class="container-fluid card">
            @include('alerts')
            <form action="{{ route('notification_store') }}" method="post" enctype="multipart/form-data">
                <div class="row body">              
                    @csrf
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Notification Title"  required/>
                        </div>   
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Body</label>
                            <input type="text" name="description" placeholder="Enter Detail" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Add Notification" class="btn btn-info waves-amber">
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/dist/summernote.js')}}"></script>
@stop

