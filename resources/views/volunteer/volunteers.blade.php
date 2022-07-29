@extends('layout.master')
@section('title', 'View Volunteer')
@section('parentPageTitle', 'Volunteer') 
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>VOLUNTEER</strong> List</h2>
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

                            <!--Heading S.No-->
                            <th scope="col">#</th>

                            <!--Adding Personal Details-->
                            <th scope="col">Full Name </th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">CNIC</th>
                            <th scope="col" >Present Address</th>
                    
                             <!--Adding Academic Details-->
                            <th scope="col" >University Name</th>
                            <th scope="col" >Degree</th>
                            <th scope="col" >Semester</th>

                            <!--Adding Work Details-->
                            <th scope="col" >Team</th>
                            <th scope="col" >Day</th>
                            <th scope="col" >Institution</th>
                            <th scope="col" >Designation</th>

                            <!--Column for extra actions like delete edit-->
                           
                            <th scope="col">Updation</th>
                            <th scope="col|colgroup">Deletion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <!--Getting Volunteer's Personal Details-->
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->V_ContactNumber }}</td>
                                <td>{{ $user->V_CNIC }}</td>
                                <td>{{ $user->V_PresentAddress }}</td> 

                                <!--Getting Volunteer's Academic Details-->
                                <td>{{ $user->V_UniversityName }}</td> 
                                <td>{{ $user->V_Degree}}</td>
                                <td>{{ $user->V_Semester }}</td>

                                <!--Getting Volunteer's Work Details-->
                                <td>{{ $user->V_TeamName }}</td>
                                <td>{{ $user->V_Day }}</td>
                                <td>{{ $user->V_InstituteName }}</td>
                                <td>{{ $user->V_Designation }}</td>


                                <!--Adding Buttons in last column for Updation & Deletion -->
                                
                                <td>
                                    <a  class="btn btn-success" href="{{ route ('edit', ['id' => $user->id]) }}" class="btn btn-gradient-primary btn-fw">Edit</a>
                                   
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
