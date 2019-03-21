<?php

namespace App\Http\Controllers;

use App\Routine;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email|unique:teachers|unique:students',
            'password'  => 'required|min:8|confirmed',
            'role'      => 'required'
        ]);


        if ($request->role == 1){

            $teacher = new Teacher();

            $teacher->name     = $request->name;
            $teacher->email    = $request->email;
            $teacher->password = Hash::make($request->password);

            $teacher->save();

            Routine::create(['teacher_id' => $teacher->id]);

            return redirect('login')->with('successMsg', 'Teacher ! Your Registration Completed Successfully.');
        }
        elseif($request->role == 2)
        {
            $student = new Student();

            $student->name     = $request->name;
            $student->email    = $request->email;
            $student->password = Hash::make($request->password);

            $student->save();

            return redirect('login')->with('successMsg', 'Student ! Your Registration Completed Successfully.');

        }

        else{

            return view('404');
        }

    }

    public function show($id)
    {
        //
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
        //
    }

    public function login_form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|string',
            'password'  => 'required|min:8|string',
            'role'      => 'required'
        ]);


        if ($request->role == 1){

            $teacher = Teacher::where('email', $request->email)
                ->where('status', 1)
                ->first();

            if ($teacher == NULL){

                return redirect('/login')->with('successMsg', 'Teacher. Email Does Not Match !');
            }

            else{

                $validPassword = Hash::check($request->password, $teacher->password);

                if($validPassword == TRUE){

                    Session::put('teacher_id', $teacher->id);

                    return redirect('/teacher');
                }

                else{
                    return redirect('/login')->with('successMsg', 'Teacher. Login Failed !');
                }

            }


        }
        elseif($request->role == 2)
        {
            $student = Student::where('email', $request->email)
                ->where('status', 1)
                ->first();


            if ($student == NULL){

                return redirect('/login')->with('successMsg', 'Student. Email Does Not Match !');
            }

            else{

                $validPassword = Hash::check($request->password, $student->password);

                if($validPassword == TRUE){

                    Session::put('student_id', $student->id);

                    return redirect('/student');
                }

                else{
                    return redirect('/login')->with('successMsg', 'Student. Login Failed !');
                }
            }


        }

        else{

            return view('404');
        }

    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        return redirect('/login')->with('successMsg', 'Logout Successfully !');
    }
}
