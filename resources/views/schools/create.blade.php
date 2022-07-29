@extends('layout.master')
@section('title', 'Manage Schools')
@section('parentPageTitle', 'Schools')
@section('content')
   <!-- Vertical Layout -->
   <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card">
            <div class="header">
                <h2><strong>Manage</strong> Schools</small></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                @include('alerts')
                <form action="{{ route('store_school') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">School Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter School Name  ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">School Location</label>
                            <input type="text" id="location" name="location" class="form-control" placeholder="Enter School Location  ">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">School Timing</label>
                            <input type="text" id="timing" name="timing" class="form-control" placeholder="e.g 10:00 AM t0 4:00 PM">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">School Photo</label>
                            <input type="file" id="image" name="image" class="form-control" placeholder="e.g 10:00 AM t0 4:00 PM">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                        </div>
                       
                </div>
                </form>
            </div>
        </div>
    </div>
</div>







@stop
