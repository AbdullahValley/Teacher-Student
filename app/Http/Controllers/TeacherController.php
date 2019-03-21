<?php

namespace App\Http\Controllers;

use App\Council;
use App\Teacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $councils = Council::orderBy('id', 'desc')->where('teacher_id', session()->get('teacher_id'))->get();
        return view('teacher.index', compact('councils'))->with('successMsg', 'Teacher ! You Login Successfully.');
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
        $teacher = Teacher::find($id);
        return view ('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'photo'         => 'mimes:jpeg,png',
        ]);

        $teacher = Teacher::find($id);

        $teacher->name          = $request->name;
        $teacher->password      = Hash::make($request->password);
        $teacher->mobile	    = $request->mobile;
        $teacher->bio           = $request->bio;
        $teacher->department    = $request->department;

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $image = Image::make($file)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/teacher/' . $file->getClientOriginalName()));

            if ($image) {
                $teacher->photo = $file->getClientOriginalName();
            }
        }

        $teacher->status   = $request->status;

        $teacher->save();

        return redirect('teacher/')->with('successMsg', 'Your Profile Updated Successfully!');
    }

    public function destroy($id)
    {
        //
    }
}
