
<div class="menu_section">
    <h3>Profile</h3>
    <ul class="nav side-menu">

        <li><a><i class="fa fa-user"></i> Your Profile <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">

                <li><a href="{{ url('/teacher/'.Session::get('teacher_id').'/edit') }}"> Update Profile</a></li>

            </ul>
        </li>


    </ul>
</div>

<div class="menu_section">
    <h3>Routine</h3>
    <ul class="nav side-menu">
        <li><a><i class="fa fa-desktop"></i> Class Schedule<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ url('/routine/'.Session::get('teacher_id').'/edit') }}"> Update Routine</a></li>
            </ul>
        </li>

    </ul>
</div>

<div class="menu_section">
    <h3>Counselling</h3>
    <ul class="nav side-menu">
        <li><a><i class="fa fa-desktop"></i> Counselling Time<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ url('/council/create') }}">Add Counselling Time</a></li>
                <li><a href="{{ url('/teacher') }}">Counselling Schedules</a></li>
            </ul>
        </li>

    </ul>
</div>
