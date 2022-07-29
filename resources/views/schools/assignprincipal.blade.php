@extends('layout.master')
@section('title', 'Manage Principal')
@section('parentPageTitle', 'Principal')
@section('content')
   <!-- Vertical Layout -->
   <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card">
            <div class="header">
                <h2><strong>Manage</strong> Principal</small></h2>
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
                <form action="{{ route('change_principal') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($currentuser != null)
                        <div class="alert alert-success">
                            {{ $currentuser->name }} is currently the principal of this school named {{ $school->name }} <br>
                            User ID : {{ $currentuser->id }}
                        </div>
                        @else
                        <div class="alert alert-danger">
                            This school "{{ $school->name }}" has previouly no assigned principal, Assign now! 
                        </div>
                    @endif
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="hidden" name="school_id" value="{{ $school->id }}">
                            <label for="name">Select User</label>
                            <select class="form-control show-tick ms select2" name="user_id" id="usr_id" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-info" value="Assign Principal">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>







@stop
