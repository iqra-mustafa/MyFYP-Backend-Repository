@extends('layout.master')
@section('title', 'View Report')

 @section('parentPageTitle', 'Report') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Report</strong> Details</h2>
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
                            <th scope="col">Date</th>
                            <th scope="col">NoOfPresentStudents</th>
                            <th scope="col">Feedback</th>
                            <th scope="col">SchoolName</th>
{{-- 
                            <th scope="col|colgroup">Updation</th>
                            <th scope="col|colgroup">Deletion</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $reports as $dailyreport)
                            <tr>
                            <th>{{ $dailyreport->id }}</th>
                            <td>{{ $dailyreport->Date }}</td>
                            <td>{{ $dailyreport->NoOfPresentStudents}}</td>
                            <td>{{ $dailyreport->Feedback}}</td>
                            <td>{{ $dailyreport->school->name}}</td>
                            {{-- <td>
                                <a href="" class="btn btn-success">Edit</a>
                            </td> 
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td> --}}
                            
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
