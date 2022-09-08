<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Seeder;

class UsersData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        UserData::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/users-1.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $data = array(
                    "UID" =>$record['0'],
                    "name" => $record['1'],
                    "age" => $record['2'],
                    "email" => $record['3'],
                    "phone" => $record['4'],
                    "gender" => $record['5']
                );
                UserData::create($data);
            }
            $heading = false;
        }
        fclose($input_file);
    }
}
