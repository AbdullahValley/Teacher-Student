<!DOCTYPE html>
<html lang="en">

@include('student.layouts.head')

<body class="nav-md">
<div class="container body">

    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('#') }}" class="site_title"><i class="fa fa-empire"></i> <span>Student</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">

                    <div class="profile_info">
                        <span>Welcome</span>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    @include('student.layouts.sidebar')

                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>

                    @include('student.layouts.navbar')

                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                &copy; 2019 Students. All Rights Reserved.
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    </div>
</div>
@include('student.layouts.footer')
</body>
</html>