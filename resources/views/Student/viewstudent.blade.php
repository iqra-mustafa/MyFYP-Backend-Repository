@extends('layout.master')
@section('title', 'View Student')
@section('parentPageTitle', 'Student')
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Students</strong> List</h2>
                <ul class="header-dropdown">

               <!-- Adding More and cross buttons on top right corner-->

                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right slideUp">

                            <!--ye javascript ka kia h ????????????-->
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


<!--Making Table by firstly adding headings and then getting data from database-->
<div class="body">
    <div class="table-responsive">
        <table class="table  table-striped table-hover dataTable js-exportable">
            <thead class="thead-dark">
                <tr>
                                
                                <th scope="col">#</th>
                                <th scope="col">S_Name</th>
                                <th scope="col">S_Gender </th>
                                <th scope="col">S_DOB </th>
                                <th scope="col">S_Section </th>
                                <th scope="col">S_Religion </th>
                                <th scope="col">S_Nationality </th>
                                <th scope="col">S_SchoolName </th>
                                <th scope="col">S_PermanentAddress </th>
                                <th scope="col">S_ContactNumber </th>
                                <th scope="col">S_FatherName</th>
                                <th scope="col">S_FatherCNIC</th>
                                <th scope="col">S_FatherOccupation </th>
                                <th scope="col">S_MonthlyIncome</th>
                                
                                <th scope="col|colgroup">Updation</th>
                                <th scope="col|colgroup">Deletion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                
                                   <!--id b hni chahiy dalni h-->

                                  
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->S_Name }}</td>
                                    <td>{{ $student->S_Gender }}</td>
                                    <td>{{ $student->S_DOB }}</td>
                                    <td>{{ $student->S_Section }}</td>
                                    <td>{{ $student->S_Religion }}</td>
                                    <td>{{ $student->S_Nationality }}</td>
                                    <td>{{ $student->S_SchoolName}}</td>
                                    <td>{{ $student->S_PermanentAddress }}</td>
                                    <td>{{ $student->S_ContactNumber }}</td>
                                    <td>{{ $student->S_FatherName }}</td>
                                    <td>{{ $student->S_FatherCNIC }}</td>
                                    <td>{{ $student->S_FatherOccupation }}</td>
                                    <td>{{ $student->S_MonthlyIncome}}</td>
                                
                               
                                     
                                    <!--Adding Buttons in last column for Updation & Deletion -->
                                 
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                </td> 
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
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
@section('page-script') 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/sweetalert.js')}}"></script>
 
@stop
