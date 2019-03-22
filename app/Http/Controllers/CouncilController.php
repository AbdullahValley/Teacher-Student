<?php

namespace App\Http\Controllers;

use App\Council;
use Illuminate\Http\Request;

class CouncilController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('teacher.council');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'day'           => 'required',
            'time_start'    => 'required',
            'time_end'      => 'required'
        ]);

        $council = new Council();

        $council->teacher_id    = $request->teacher_id;
        $council->day           = $request->day;
        $council->time_start	= $request->time_start;
        $council->time_end	    = $request->time_end;

        $council->save();

        return redirect('teacher')->with('successMsg', 'Teacher ! Your Counselling Schedule Added Successfully.');
    }

    public function show($id)
    {
        $councils = Council::orderBy('id', 'desc')->where('teacher_id', $id)->get();
        return view ('student.council', compact('councils'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Council::destroy($id);
        return redirect('teacher')->with('successMsg', 'The Counselling Schedule Deleted Successfully!');
    }
}
