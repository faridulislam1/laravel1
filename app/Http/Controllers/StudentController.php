<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;
use App\Models\Department;


class StudentController extends Controller
{
    private static $students,$student;
    public function index(Request $request){
        student::saveStudent($request);
        return back()->with('message','Info saved !! ');
    }
    public function studentList(){
       self::$students=DB::table ('students')
           ->join('departments','students.department','departments.id')
           ->select('students.*','departments.department_name')
           ->get();
        return view('student-list',[
            'students'=>self::$students
        ]);

    }
    public function studentDelete(Request $request){
        student::deleteStudent($request->id);
        return back()->with('message','Info saved !! ');


    }
    public function studentEdit($id){
        self::$student=student::find($id);
        return view('student-edit',[
            'student'=>self::$student,
            'departments'=>Department::all()
        ]);
    }
    public function studentUpdate(Request $request){
        student::studentUpdate($request);
        return back()->with('message','Info saved !! ');

    }
}
