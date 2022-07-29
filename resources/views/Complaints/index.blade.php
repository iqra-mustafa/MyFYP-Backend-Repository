@extends('layout.master')
@section('title', 'View Complaints')

 @section('parentPageTitle', 'Complaints') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Complaint</strong> Details</h2>
                <ul class="header-dropdown">

                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">
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
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">School Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $complaints as $complaint)
                            <tr>
                                <th>{{ $complaint->id }}</th>
                                <td>{{ $complaint->title }}</td>
                                <td>{{ $complaint->description}}</td>
                                <td>{{ $complaint->school->name}}</td>
                                <td>{{ $complaint->user->name}}</td>
                                <td>
                                    <img src="{{ asset('complaints') }}/{{ $complaint->image }}" height="100" width="100" alt="">
                                </td>
                            
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</div>




@stop
