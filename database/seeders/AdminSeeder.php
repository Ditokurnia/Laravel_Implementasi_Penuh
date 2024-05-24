<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new User();
        $superAdmin->name = "Superadmin";
        $superAdmin->password = Hash::make('Password123');
        $superAdmin->email = "admin@amandemy.co.id";
        $superAdmin->age = 25;
        $superAdmin->alamat = "Kantor Amandemy";
        $superAdmin->birth = '2024-05-05';
        $superAdmin->gender = 'male';
        $superAdmin->save();

        $superAdmin->assignRole('superadmin');

        $userAdmin = new User();
        $userAdmin->name = "Administrator";
        $userAdmin->password = Hash::make('Amandemy123');
        $userAdmin->email = "admin_amandemy@amandemy.co.id";
        $userAdmin->age = 25;
        $userAdmin->alamat = "Kantor Amandemy";
        $userAdmin->birth = '2024-05-01';
        $userAdmin->gender = 'male';
        $userAdmin->save();

        $userAdmin->assignRole('administrator');
    }
}
