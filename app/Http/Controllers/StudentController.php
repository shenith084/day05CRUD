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

}
