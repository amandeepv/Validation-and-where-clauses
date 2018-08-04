<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
	{
		$students = Student::orderBy('id', 'asc')->get();
		return view('student.home')->with('students', $students);
    }
    public function store(Request $request)
    {
		$this->validateData($request, Student::validationRules());
		$val = Student::store($request->toArray());
		if($val == 1)
		return "Failed because same record does not exist";
		else
		{
			return redirect()->route('home')->with('info','Student Record saved successfully|');
		}
	}
}
