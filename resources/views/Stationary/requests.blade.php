@extends('layout.master')
@section('title', 'Stationary Requests')

 @section('parentPageTitle', 'Stationary') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Stationary</strong> Details</h2>
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
                @include('alerts')
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">Username</th>
                            <th scope="col">User email</th>
                            <th scope="col">User Contact</th>
                            <th scope="col">School Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $stationaries as $req)
                            <tr>
                                <th>{{ $req->id }}</th>
                                <td>{{ $req->description}}</td>
                                <td>{{ $req->user->name}}</td>
                                <td>{{ $req->user->email}}</td>
                                <td>{{ $req->user->V_ContactNumber}}</td>
                                <td>{{ $req->school->name }}</td>
                                <td>
                                    @if ($req->status == 0)
                                        <a href="{{ route('approve_stationary',$req->id) }}" class="btn btn-success btn-sm">Approve</a>
                                    @else
                                        <span class="badge badge-success">Approved</span>
                                    @endif
                                   
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
