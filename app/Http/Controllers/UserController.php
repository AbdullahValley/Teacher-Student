<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed',
            'role'      => 'required'
        ]);


        if ($request->role == 1){

            $teacher = new Teacher();

            $teacher->name     = $request->name;
            $teacher->email    = $request->email;
            $teacher->password = Hash::make($request->password);

            $teacher->save();

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

/*        return User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/

        dd($request);
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
}
