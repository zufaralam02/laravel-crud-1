<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->StudentModel = new StudentModel();
    }

    public function get()
    {
        $data = [
            "student" => $this->StudentModel->getData()
        ];

        return view('v_student', $data);
    }
}
