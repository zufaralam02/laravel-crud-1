<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeacherModel extends Model
{
    public function get()
    {
        // return [
        //     [
        //         'id' => '1',
        //         'name' => 'Fulan',
        //         'gender' => 'male'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => 'Allan',
        //         'gender' => 'male'
        //     ],
        //     [
        //         'id' => '3',
        //         'name' => 'Fulanah',
        //         'gender' => 'female'
        //     ],
        // ];

        return DB::table('teacher')->get();
    }

    public function detail($id)
    {
        return DB::table('teacher')->where('id', $id)->first();
    }

    public function add($data)
    {
        DB::table('teacher')->insert($data);
    }
}
