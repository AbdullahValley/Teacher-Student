@extends('student.layouts.master')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Your Profile</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update Profile



                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form action="{{ action('StudentController@update', $student->id)  }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
                            @csrf
                            @method('PUT')

                            <span class="section">Personal Info</span>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Your Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{ $student->name }}" required="required" type="text">
                                    @if($errors->has('name')) <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" value="{{ $student->email }}" required="required" class="form-control col-md-7 col-xs-12" disabled>
                                    @if($errors->has('email')) <span class="text-danger">{{ $errors->first('email') }}</span> @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Mobile <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="telephone" name="mobile" value="{{ $student->mobile }}" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('mobile')) <span class="text-danger">{{ $errors->first('mobile') }}</span> @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Bio
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="textarea" name="bio" class="form-control col-md-7 col-xs-12">{{ $student->bio }}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="department" name="Department" value="{{ $student->department }}" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('department')) <span class="text-danger">{{ $errors->first('department') }}</span> @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Change Password
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="password" name="Department" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('password')) <span class="text-danger">{{ $errors->first('password') }}</span> @endif
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="photo">Photo <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <img src="{{ $student->photo ? asset('uploads/student'). '/' .$student->photo : asset('uploads/avatar.png') }}" alt="Your Image" width="80px;">

                                    <br><br>

                                    <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('photo')) <span class="text-danger">{{ $errors->first('photo') }}</span> @endif
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection