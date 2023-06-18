<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $user = new User();
        $user->username = 'Ala Rai Abdiallah';
        $user->email = 'admin@mentor.com';
        $user->password = bcrypt('123');
        $user->is_admin = true;
        $user->save();

        $user = new User();
        $user->username = 'Abiyyu Daffa Alam';
        $user->email = 'users@mentor.com';
        $user->password = bcrypt('123');
        $user->is_admin = false;
        $user->save();

    }
}
