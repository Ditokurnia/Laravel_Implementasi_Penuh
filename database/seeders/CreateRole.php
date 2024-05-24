<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
        ]);

        Role::create([
            'name' => 'user',
        ]);

        Role::create([
            'name' => 'administrator',
        ]);
    }
}