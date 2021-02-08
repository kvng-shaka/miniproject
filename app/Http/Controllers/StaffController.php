<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Student;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index')->with('staff', $staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'staff_no'     => 'required',
            'firstname'    => 'required',
            'lastname'     => 'required',
            'levels'       => 'required',
            'class_held'   => 'nullable' 
        ]);

        $savePost = new Staff();

        $savePost->staff_no       = $request->staff_no;
        $savePost->firstname      = $request->firstname;
        $savePost->lastname       = $request->lastname;
        $savePost->levels         = $request->levels;
        $savePost->class_held     = $request->class_held;

        $savePost->save();
        if($savePost){
            return redirect('/')->with("success","staff added succesfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewall($staff_id)
    {
        //Getting staff by each student
        $staff_first = Staff::where("staff_id", "=", "1")->get();
        $staff_second = Staff::where("staff_id", "=", "2")->get();
        $staff_third = Staff::where("staff_id", "=", "3")->get();
        $staff_fourth = Staff::where("staff_id", "=", "4")->get();
        $staff_fifth = Staff::where("staff_id", "=", "5")->get();
        $staff_sixth = Staff::where("staff_id", "=", "9")->get();

        $all_students = Student::all();

        return view('student.showstudent')->with('students', $all_students)->with('staff_id', $staff_name);
    }
}
