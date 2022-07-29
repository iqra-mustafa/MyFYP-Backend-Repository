<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{  url ('dashboard.index')}}"><span class="m-l-10">QalamMovement</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="{{ asset('assets/images/frontendimages/qmlogo.png') }}" width="30%" alt="User"></a></div>
                    <div class="detail">
                        <h4>QM</h4>
                        <small>Non Profit Organization</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{ url('dashboard') }}" ><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


            <li class="{{ Request::segment(1) === 'categories' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-assignment"></i> <span>Volunteer</span></a>
                <ul class="ml-menu">
                    <!-- <li class="{{ Request::segment(2) === 'categories' ? 'active' : null }}"><a href="{{ route ('volunteer') }}">Add Volunteer</a></li> -->
                    <li class="{{ Request::segment(2) === 'categories' ? 'active' : null }}"><a href="{{ route ('volunteer') }}">View Volunteer</a></li>
                     </ul>
            </li>
             <li class="{{ Request::segment(1) === 'subcategories' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Student</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'subcategories' ? 'active' : null }}"><a href="{{ route ('view_student') }}">View Student</a></li>
                
                </ul> 
             </li>
             <li class="{{ Request::segment(1) === '' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>School</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === '' ? 'active' : null }}"><a href="{{ route ('add_school') }}">Add School</a></li>
                    <li class="{{ Request::segment(2) === '' ? 'active' : null }}"><a href="{{ route ('view_school') }}">View School</a></li>
                </ul> 
             </li>

            {{-- <li class="{{ Request::segment(1) === 'subchildcategories' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-apps"></i> <span>Institution</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'addsubchildcategory' ? 'active' : null }}"><a href="{{ route ('create') }}">Add Institution</a></li>
                    <li class="{{ Request::segment(2) === 'subchildcategories' ? 'active' : null }}"><a href="{{ route ('view_institution') }}">View Institution</a></li>
                </ul>
            </li> --}}
            
            <li class="{{ Request::segment(1) === 'post' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-blogger"></i> <span>Staionery</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'addpost' ? 'active' : null }}"><a href="{{ route ('view_stationary_request') }}">View Request</a></li>
                    <li class="{{ Request::segment(2) === 'posts' ? 'active' : null }}"><a href="{{ route('approved_stationary_request') }}">Verified Request</a></li>
                  
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'post' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-blogger"></i> <span>Syllabus</span></a>
                <ul class="ml-menu">
                     <li class="{{ Request::segment(2) === 'ViewSyllabus' ? 'active' : null }}"><a href="{{ route ('view_Syllabus') }}">View Syllabus</a></li> 
                  
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'post' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-blogger"></i> <span>Notifications</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'addpost' ? 'active' : null }}"><a href="{{ route ('Add_Notification') }}">Add Notification</a></li>
                    <li class="{{ Request::segment(2) === 'posts' ? 'active' : null }}"><a href="{{ route ('View_Notification') }}">View Notification</a></li>
                  
                </ul>
            </li>
            <li class="{{ Request::segment(1) === 'imagegallery' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-folder"></i> <span>Services</span></a>
                <ul class="ml-menu">
                    
                     <li class="{{ Request::segment(2) === 'image' ? 'active' : null }}"><a href="{{ route ('image.index') }}">View Security Request</a></li> <!-- Meeting/Daily-->
                      <li class="{{ Request::segment(2) === 'addimage' ? 'active' : null }}"><a href="{{ route ('image.create') }}">View Transport Request</a></li>
                       
                   
                    </ul>
            </li>

            <li class="{{ Request::segment(1) === 'video' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-chart"></i> <span>Reports</span></a>
                <ul class="ml-menu">
                    {{-- <li class="{{ Request::segment(2) === 'addvideo' ? 'active' : null }}"><a href="{{ route ('video.create') }}">Generate Report</a></li> --}}
                    <li class="{{ Request::segment(2) === 'Report.ViewReport' ? 'active' : null }}"><a href="{{ route ('view_DailyReport') }}">View Daily Report</a></li>
                </ul>
            </li>

            
            <li class="{{ Request::segment(1) === '' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-chart"></i> <span>Complaints</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'addvideo' ? 'active' : null }}"><a href="{{ route ('view_complaints') }}">View Complaints</a></li>
                </ul>
            </li>
            <li class="{{ Request::segment(1) === '' ? 'active open' : null }}">
                <a href="#App" class="menu-toggle"><i class="zmdi zmdi-chart"></i> <span>Emergency Requests</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::segment(2) === 'addvideo' ? 'active' : null }}"><a href="{{ route ('pending_emergency_requests') }}">Pending</a></li>
                    <li class="{{ Request::segment(2) === 'addvideo' ? 'active' : null }}"><a href="{{ route ('resolved_emergency_requests') }}">Resolved</a></li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
