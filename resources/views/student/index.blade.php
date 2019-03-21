@extends('student.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Teacher's Schedule</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Teachers</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            @if(session('successMsg'))
                                <span class="alert alert-success alert-dismissible" role="alert">
                                {{ session('successMsg') }}
                                </span>
                                <br><br>
                            @endif
                        </p>

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Department</th>
                                <th>Availability</th>
                                <th>Photo</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sl=1)

                            @foreach($teachers as $teacher_info)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $teacher_info->name }}</td>
                                    <td>{{ $teacher_info->email }}</td>
                                    <td>{{ $teacher_info->mobile }}</td>
                                    <td>{{ $teacher_info->department }}</td>
                                    <td>
                                        {!! $teacher_info->status ?
                                                '<button class="btn btn-success">Available</button>' :
                                                '<button class="btn btn-danger">NOT Available</button>' !!}
                                    </td>
                                    <td>

                                        <img src="{{ $teacher_info->photo ? asset('uploads/teacher'). '/' .$teacher_info->photo : asset('uploads/avatar.png') }}" alt="Image" width="80px;">

                                    </td>

                                    <td>


                                        <a href="{{ '/routine/'.$teacher_info->id }}" class="btn btn-info btn-xs"><i class="fa fa-book"></i> View Schedule</a>


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
@endsection