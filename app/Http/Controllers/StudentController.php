<?php

namespace App\Http\Controllers;

use App\Models\Student;
// use App\Models\Institute;
// use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('frontend.studentregisteredit');
        return view('frontend.studentregisteredit',[
            'students'=>Student::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$institute = Institute::where('status',1)->pluck('name','id');
        //$student_class = StudentClass::where('status',1)->pluck('name','id');
        return view('frontend.studentregister');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $student = new Student;
        $student->name_en = $request->name_en;
        $imageName = $request->name_en.'.'.$request->image->extension();
        $request->image->move(public_path('studentPhoto'), $imageName);
        //dd($imageName);


        $student->image = $imageName;
        $student->school_madrasa = $request->school_madrasa;
        $student->student_type = $request->student_type;
        $student->name_en = $request->name_en;
        $student->name_bn = $request->name_bn;
        $student->area = $request->area;
        $student->school_name = $request->school_name;
        $student->save();

        session()->put('success', 'Item created successfully.');;

        return view('frontend.studentregisteredit');



        //dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //$institute = Institute::where('status',1)->pluck('name','id');
        //$student_class = StudentClass::where('status',1)->pluck('name','id');
        return view ('frontend.studentregister', compact('student', 'institute', 'student_class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
