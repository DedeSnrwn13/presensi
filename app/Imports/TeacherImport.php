<?php

namespace App\Imports;

use Illuminate\Support\{Collection, Str};
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
use App\{Teacher, User};

class TeacherImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.0' => 'required|unique:teachers,nik,',
            '*.1' => 'required|min:2|max:50',
            '*.2' => 'required|max:15|unique:teachers,no_hp,',
            '*.3' => 'required|unique:users,email,',
            '*.4' => 'required',
            '*.5' => 'required',
            '*.6' => 'required',
            '*.7' => 'required|string|min:4',
            '*.8' => 'required',
        ])->validate();

        foreach ($rows as $key => $row) {
            if ($row[1] && $row[3]) {
                if ($key >= 1) {
                    $user = User::create([
                        'name'           => $row[1],
                        'role'           => 'teacher',
                        'email'          => $row[3],
                        'password'       => bcrypt($row[7]),
                    ]);
                }
            }

            if($row[0] && $row[1] && $row[5]) {
                if ($key >= 1) {
                    Teacher::create([
                        'user_id'  => $user->id,
                        'nik'      => $row[0],
                        'name'     => $row[1],
                        'no_hp'    => $row[2],
                        'major'    => $row[4],
                        'subjects' => $row[5],
                        'username' => $row[6],
                        'gender'   => $row[8],
                    ]);
                }
            }
        }
    }
}
