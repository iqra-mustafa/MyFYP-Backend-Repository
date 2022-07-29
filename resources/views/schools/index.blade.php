@extends('layout.master')
@section('title', 'Schools')
{{-- @section('parentPageTitle', 'Categories') --}}
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>School</strong> List</h2>
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
                            <th scope="col">School Name </th>
                            <th scope="col">Location</th>
                            <th scope="col">Timings</th>
                            <th scope="col">Report</th>
                            <th scope="col">Principal</th>
                            <th scope="col">Action</th>
                            <th scope="col">Schedule</th>
                            <th scope="col">Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schools as $school)
                            <tr>
                                <th scope="row">{{ $school->id }}</th>
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->location }}</td>
                                <td>{{ $school->timing }}</td>
                                <td>
                                    <a href="{{ route('view_daily_report',$school->id) }}" class="btn btn-sm btn-info">
                                        view daily report
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('assign_principal',$school->id) }}" class="btn btn-success btn-sm">
                                            Assign Principal
                                    </a>
                                </td>
                                <td style="width:20%">
                                    <a href="{{ route('delete_school', $school->id ) }}"class="btn btn-gradient-danger btn-rounded btn-sm"> <i class="zmdi zmdi-delete"></i> </a> </td>
                                </td>
                                <td>
                                    <a href="{{ route('view_schedule',$school->id) }}" class="btn btn-warning btn-sm">
                                            view schedule
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('view_attendance',$school->id) }}" class="btn btn-default btn-sm">
                                            view attendance
                                    </a>
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
