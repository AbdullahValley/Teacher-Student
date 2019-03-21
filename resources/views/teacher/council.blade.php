@extends('teacher.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Counselling Schedule</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add New Schedule</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form method="POST" action="{{ action('CouncilController@store') }}">
                            @csrf
                            <div class="item form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day"> Day <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="day" id="day" class="form-control col-md-7 col-xs-12" required="required">
                                        <option value="">Select Day</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                    @if($errors->has('day')) <span class="text-danger">{{ $errors->first('day') }}</span> @endif
                                </div>
                            </div>


                            <input type="hidden" name="teacher_id" value="{{ Session::get('teacher_id') }}">

                            <br><br><br>


                            <div class="item form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time_start"> Starting Time <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="time" name="time_start" id="time_start" class="form-control col-md-7 col-xs-12" required="required">
                                    @if($errors->has('time_start')) <span class="text-danger">{{ $errors->first('time_start') }}</span> @endif
                                </div>
                            </div>


                            <br><br><br>


                            <div class="item form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time_end"> Ending Time <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="time" name="time_end" id="time_end" class="form-control col-md-7 col-xs-12" required="required">
                                    @if($errors->has('time_end')) <span class="text-danger">{{ $errors->first('time_end') }}</span> @endif
                                </div>
                            </div>


                            <br><br><br>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Add Schedule</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection