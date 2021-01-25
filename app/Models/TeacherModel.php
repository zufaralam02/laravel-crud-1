<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TeacherModel extends Model
{
    public function getData()
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

    public function detailData($id)
    {
        return DB::table('teacher')->where('id', $id)->first();
    }

    public function addData($data)
    {
        DB::table('teacher')->insert($data);
    }

    public function editData($id, $data)
    {
        DB::table('teacher')->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
        DB::table('teacher')->where('id', $id)->delete();
    }
}
