<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentModel extends Model
{
    public function getData()
    {
        return DB::table('student')
            ->leftJoin('grade', 'grade.id', '=', 'student.grade_id')
            ->leftJoin('subject', 'subject.id', '=', 'student.subject_id')
            ->get();
    }
}
