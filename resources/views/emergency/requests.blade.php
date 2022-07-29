@extends('layout.master')
@section('title', 'Emergency Requests')

 @section('parentPageTitle', 'Emergency') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Emergency</strong> Details</h2>
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
                            <th scope="col">Type</th>
                            <th scope="col">Username</th>
                            <th scope="col">User email</th>
                            <th scope="col">User Contact</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $requests as $req)
                            <tr>
                                <th>{{ $req->id }}</th>
                                <td>{{ $req->title }}</td>
                                <td>{{ $req->description}}</td>
                                <td>
                                    @if ($req->request_type == 0)
                                        <span class="badge badge-success">Transport request</span>
                                        @else
                                        <span class="badge badge-danger">Emergency request</span>
                                    @endif
                                   
                                </td>
                                <td>{{ $req->user->name}}</td>
                                <td>{{ $req->user->email}}</td>
                                <td>{{ $req->user->V_ContactNumber}}</td>
                                <td>
                                    @if ($req->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                        @else
                                        <span class="badge badge-success">Resolved</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($req->status == 0)
                                      <a  class="btn btn-success" href="{{ route('update_request_status',$req->id) }}" >
                                            Make Resolved
                                      </a>
                                      @else
                                            <span class="badge badge-success">resolved</span>
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
