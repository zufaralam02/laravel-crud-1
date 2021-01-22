<?php

namespace App\Http\Controllers;

use App\Models\TeacherModel;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->TeacherModel = new TeacherModel();
    }

    public function get()
    {
        $data = [
            'teacher' => $this->TeacherModel->get()
        ];

        return view('v_teacher', $data);
    }

    public function detail($id)
    {
        if (!$this->TeacherModel->detail($id)) {
            abort(404);
        }

        $data = [
            'teacher' => $this->TeacherModel->detail($id)
        ];

        return view('v_teacher_detail', $data);
    }

    public function add()
    {
        return view('v_teacher_add');
    }

    public function processAdd()
    {
        Request()->validate([
            'nip' => 'required|unique:teacher,nip|min:6|max:6',
            'name' => 'required',
            'subject' => 'required',
            'gender' => 'required|in:male,female',
            'photo' => 'required|mimes:jpg,jpeg,png|max:1024',
        ]);

        $photo = Request()->photo;
        $photoName = Request()->nip . '.' . $photo->extension();
        $photo->move(public_path('photo'), $photoName);

        $data = [
            'nip' => Request()->nip,
            'name' => Request()->name,
            'subject' => Request()->subject,
            'gender' => Request()->gender,
            'photo' => $photoName
        ];

        $this->TeacherModel->add($data);

        return redirect()->route('teacher')->with('message', 'successfully added teacher');
    }
}
