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
                        <h2>Teacher Counselling</h2>
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
                                <th>Counselling Day</th>
                                <th>Counselling Time Start</th>
                                <th>Counselling Time End</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sl=1)
                            @foreach($councils as $council)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td align="center"><b>{{ $council->day }}</b></td>
                                    <td align="center">{{ $council->time_start }}</td>
                                    <td align="center">{{ $council->time_end }}</td>
                                    <td>
                                        <form action="{{ action('CouncilController@destroy', $council->id) }}" method="post" style="display: inline">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Delete Counselling Schedule. Are you Sure ?')">
                                                <i class="fa fa-trash-o"> Delete</i>
                                            </button>
                                        </form>

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