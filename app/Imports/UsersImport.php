<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row[1]);
        return new User([
            'id' => $row[0],
            'full_name' => $row[1],
            'email' => $row[2],
            'phone_number' => $row[3],
        ]);
    }
}
