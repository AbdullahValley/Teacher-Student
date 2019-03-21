<?php

namespace App\Http\Controllers;

use App\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $routine = Routine::find($id);
        return view ('student.routine', compact('routine'));
    }

    public function edit($id)
    {
        $routine = Routine::find($id);
        return view ('teacher.routine.edit', compact('routine'));
    }

    public function update(Request $request, $id)
    {
        $routine = Routine::find($id);

        $routine->day_1_time_1  =  $request->day_1_time_1;
        $routine->day_1_time_2  =  $request->day_1_time_2;
        $routine->day_1_time_3  =  $request->day_1_time_3;
        $routine->day_1_time_4  =  $request->day_1_time_4;
        $routine->day_1_time_5  =  $request->day_1_time_5;
        $routine->day_1_time_6  =  $request->day_1_time_6;
        
        $routine->day_2_time_1  =  $request->day_2_time_1;
        $routine->day_2_time_2  =  $request->day_2_time_2;
        $routine->day_2_time_3  =  $request->day_2_time_3;
        $routine->day_2_time_4  =  $request->day_2_time_4;
        $routine->day_2_time_5  =  $request->day_2_time_5;
        $routine->day_2_time_6  =  $request->day_2_time_6;
        
        $routine->day_3_time_1  =  $request->day_3_time_1;
        $routine->day_3_time_2  =  $request->day_3_time_2;
        $routine->day_3_time_3  =  $request->day_3_time_3;
        $routine->day_3_time_4  =  $request->day_3_time_4;
        $routine->day_3_time_5  =  $request->day_3_time_5;
        $routine->day_3_time_6  =  $request->day_3_time_6;
        
        $routine->day_4_time_1  =  $request->day_4_time_1;
        $routine->day_4_time_2  =  $request->day_4_time_2;
        $routine->day_4_time_3  =  $request->day_4_time_3;
        $routine->day_4_time_4  =  $request->day_4_time_4;
        $routine->day_4_time_5  =  $request->day_4_time_5;
        $routine->day_4_time_6  =  $request->day_4_time_6;
        
        $routine->day_5_time_1  =  $request->day_5_time_1;
        $routine->day_5_time_2  =  $request->day_5_time_2;
        $routine->day_5_time_3  =  $request->day_5_time_3;
        $routine->day_5_time_4  =  $request->day_5_time_4;
        $routine->day_5_time_5  =  $request->day_5_time_5;
        $routine->day_5_time_6  =  $request->day_5_time_6;
        
        $routine->day_6_time_1  =  $request->day_6_time_1;
        $routine->day_6_time_2  =  $request->day_6_time_2;
        $routine->day_6_time_3  =  $request->day_6_time_3;
        $routine->day_6_time_4  =  $request->day_6_time_4;
        $routine->day_6_time_5  =  $request->day_6_time_5;
        $routine->day_6_time_6  =  $request->day_6_time_6;
        
        $routine->day_7_time_1  =  $request->day_7_time_1;
        $routine->day_7_time_2  =  $request->day_7_time_2;
        $routine->day_7_time_3  =  $request->day_7_time_3;
        $routine->day_7_time_4  =  $request->day_7_time_4;
        $routine->day_7_time_5  =  $request->day_7_time_5;
        $routine->day_7_time_6  =  $request->day_7_time_6;


        $routine->save();

        return redirect('teacher/')->with('successMsg', 'Your Routine Updated Successfully!');
    }

    public function destroy($id)
    {
        //
    }
}
