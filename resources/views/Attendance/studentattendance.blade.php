@extends('layout.master')
@section('title', 'View Attendance')

 @section('parentPageTitle', 'Attendance') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Attendance</strong> Details</h2>
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
                                <th scope="col">ST ID#</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $studentattendances as $attendance)
                            <tr>
                                <th>{{ $attendance->student->id }}</th>
                                <td>{{ $attendance->student->S_Name}}</td>
                                <td>
                                    @if ($attendance->value == 0)
                                        <span class="badge badge-success">Present</span>
                                        @else
                                        <span class="badge badge-danger">Absent</span>
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
