<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        $teachers = Teacher::orderBy('id', 'desc')->get();
        return view('student.index', compact('teachers'))->with('successMsg', 'Student ! You Login Successfully.');
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
        //
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view ('student.edit', compact('student'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'photo'         => 'mimes:jpeg,png',
        ]);

        $student = Student::find($id);

        $student->name          = $request->name;
        $student->password      = Hash::make($request->password);
        $student->mobile	    = $request->mobile;
        $student->bio           = $request->bio;
        $student->department     = $request->department;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/student/' . $file->getClientOriginalName()));

            if ($image) {
                $student->photo = $file->getClientOriginalName();
            }
        }

        $student->save();

        return redirect('student/')->with('successMsg', 'Your Profile Updated Successfully!');
    }


    public function destroy($id)
    {
        //
    }
}
