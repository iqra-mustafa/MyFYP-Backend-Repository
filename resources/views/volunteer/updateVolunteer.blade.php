@extends('layout.master')
@section('title', 'Update Volunteers')
@section('parentPageTitle', 'Volunteers')
@section('content')
   <!-- Vertical Layout -->
   <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-warning" role="alert">
            <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/forms/">View More</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
        </div>
        <div class="card">
            <div class="header">
                <h2><strong>Update</strong> Volunteer</h2>
                <a href="{{ route ('volunteer') }}" class="btn btn-gradient-primary btn-fw">Back to Volunteer</a>

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
                <form action="{{ route('update') }}" method="post">
                    @csrf
                    <div class="form-group">
                   <input type="hidden" name="userid" value="{{$data['userid']}}">  
                </div>
                    <div class="form-group">
                        <input type="text"  name="V_Designation"   class="form-control" placeholder="Enter Volunteer Designation  " value="{{$data['V_Designation']}}"> 
                    </div>


                    <div class="checkbox">
                        <input id="remember_me" type="checkbox">
                        <label for="remember_me">
                                Remember Me
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                </form>
            </div> 
        </div>
    </div>
</div>

@stop