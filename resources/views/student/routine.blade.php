@extends('student.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Class Schedule</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Routine</h2>
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

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <td align="center"><b>8:30 - 10:00</b></td>
                                    <td align="center"><b>10:00 - 11:30</b></td>
                                    <td align="center"><b>11:30 - 1:00</b></td>
                                    <td align="center"><b>1:00 - 2:30</b></td>
                                    <td align="center"><b>2:30 - 4:00</b></td>
                                    <td align="center"><b>4:00 - 5:30</b></td>
                                </tr>
                                </thead>


                                <tbody>

                                <tr>
                                     
                                    <td align="center"><b>SATURDAY</b></td>
                                     
                                    <td>{{ $routine->day_1_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_1_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_1_time_3 }}</td>

                                    <td>{{ $routine->day_1_time_4 }}</td>
                                     
                                    <td>{{ $routine->day_1_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_1_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>SUNDAY</b></td>
                                     
                                    <td>{{ $routine->day_2_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_2_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_2_time_3 }}</td>
                                     
                                    <td>{{ $routine->day_2_time_4 }}</td>
                                     
                                    <td>{{ $routine->day_2_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_2_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>MONDAY</b></td>
                                     
                                    <td>{{ $routine->day_3_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_3_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_3_time_3 }}</td>
                                     
                                    <td>{{ $routine->day_3_time_4 }}</td>
                                     
                                    <td>{{ $routine->day_3_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_3_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>TUESDAY</b></td>
                                     
                                    <td>{{ $routine->day_4_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_4_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_4_time_3 }}</td>
                                     
                                    <td>{{ $routine->day_4_time_4 }}</td>

                                    <td>{{ $routine->day_4_time_5 }}</td>

                                    <td>{{ $routine->day_4_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>WEDNESDAY</b></td>
                                     
                                    <td>{{ $routine->day_5_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_5_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_5_time_3 }}</td>
                                     
                                    <td>{{ $routine->day_5_time_4 }}</td>
                                     
                                    <td>{{ $routine->day_5_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_5_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>THURSDAY</b></td>
                                     
                                    <td>{{ $routine->day_6_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_6_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_6_time_3 }}</td>
                                     
                                    <td>{{ $routine->day_6_time_4 }}</td>
                                     
                                    <td>{{ $routine->day_6_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_6_time_6 }}</td>
                                </tr>
                                <tr>
                                     
                                    <td align="center"><b>FRIDAY</b></td>
                                     
                                    <td>{{ $routine->day_7_time_1 }}</td>
                                     
                                    <td>{{ $routine->day_7_time_2 }}</td>
                                     
                                    <td>{{ $routine->day_7_time_3 }}</td>

                                    <td>{{ $routine->day_7_time_4 }}</td>

                                    <td>{{ $routine->day_7_time_5 }}</td>
                                     
                                    <td>{{ $routine->day_7_time_6 }}</td>
                                </tr>

                                </tbody>
                            </table>


                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection