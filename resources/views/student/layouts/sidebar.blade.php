
<div class="menu_section">
    <h3>Teacher's Info</h3>
    <ul class="nav side-menu">
        <li><a><i class="fa fa-desktop"></i> Schedule<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ url('/student') }}">Teacher's List</a></li>
            </ul>
        </li>

    </ul>
</div>

<div class="menu_section">
    <h3>Profile</h3>
    <ul class="nav side-menu">

        <li><a><i class="fa fa-user"></i> Your Profile <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">


                <li><a href="{{ url('/student/'.Session::get('student_id').'/edit') }}"> Update Profile</a></li>

            </ul>
        </li>


    </ul>
</div>