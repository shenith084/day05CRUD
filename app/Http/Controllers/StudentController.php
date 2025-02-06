<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function SaveData(Request $request)
    {
        $this->student->create($request->all());
        return redirect()->back();  // new page ekata gihinn aphu hitapu ekatama ganna
    }

    public function showData()
    {
        $response['students'] = $this->student->all();
        return view('pages.student.index')->with($response);
    }

    public function editData($id)
    {
        $response['student'] = $this->student->find($id);
        return view('pages.student.edit')->with($response);
    }

    public function updateData(Request $request,$id)
    {
        $student = $this->student->find($id);
        $student->update(array_merge($student->toArray(), $request->toArray()));
        return redirect('student');
    }

    public function deleteData($id)
    {
        $student = $this->student->find($id);
        $student->delete();
        return redirect()->back();
    }

}
