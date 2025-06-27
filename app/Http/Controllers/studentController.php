<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function getStudents(){
        // all columns
        //$students = DB::table('students')->get();

        // only some of columns
        //$students = DB::table('students')->select('name','email')->get();

        // where
        $students = DB::table('students')->where('email', '=', 'km@gmail.com')->get();
        //$students = DB::table('students')->where('email', '=', 'km@gmail.com')->where('age', '>', 15)->get();
        // $students = DB::table('students')->where('email', '=', 'km@gmail.com')->orWhere('age', '>', 15)->get();

        //dd($students);
        //return $students;

        $students = DB::table('students')->get();
        return view('students', ['data' => $students]);
    }

    public function getStudent($id){
        $student = DB::table('students')->where('id', $id)->get();
        return view('student', ['data' => $student]);
    }

    public function addStudent() {
        $student = DB::table('students')->insert([
            'name' => 'Bashir Ahmad',
            'email' => 'ba@gmail.com'
        ]);

        return $student;
    }

    public function updateStudent(){
        $student = DB::table('students')->where('id', 1)->update([
            'name' => 'Amir Ali',
            'email' => 'a.ali@gmail.com'
        ]);

        return $student;
    }

    public function deleteStudent($id){
        $student = DB::table('students')->where('id', $id)->delete();

        // redirect to students page direct with the help of route.
        return redirect()->route('get.students')->with('success', 'Student deleted successfully!');;
    }

    // using form
    public function pageAddStudent(){
        return view('add-student');
    }

    public function saveStudent(Request $req) {
        $student = DB::table('students')->insert([
            'name' => $req->name,
            'email' => $req->email
        ]);

        return redirect()->route('get.students')->with('success', 'Student added successfully!');
    }

    public function pageUpdateStudent($id){
        $student = DB::table('students')->find($id);
        return view('update-student', ['data' => $student]);
    }

    public function upgradeStudent($id, Request $req){
        $student = DB::table('students')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email
        ]);

        return redirect()->route('get.students')->with('success', 'Student updated successfully!');
    }
}