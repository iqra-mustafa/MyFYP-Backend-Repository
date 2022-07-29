@extends('layout.master')
@section('title', 'View Instituion')
@section('parentPageTitle', 'Instituion') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>INSTITUION</strong> List</h2>
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
                    <table class="table m-b-0">
                        <thead class="thead-dark">
                            <tr>
                                
                                
                                <th scope="col">#</th>
                                <th scope="col">Institution_Name</th>
                                <th scope="col">Institution_Type </th>
                                <th scope="col">Institution_Location </th>
            
                                <th scope="col|colgroup">Updation</th>
                                <th scope="col|colgroup">Deletion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($institutions as $institution)
                                <tr>
                                
                                    <td>{{ $institution->id }}</td>
                                    <td>{{ $institution->I_Name }}</td>
                                    <td>{{ $institution->I_Type }}</td>
                                    <td>{{ $institution->I_Location }}</td>
                                    
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