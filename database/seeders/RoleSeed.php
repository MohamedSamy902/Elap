<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Role::create([
            'name' => 'recepion',
        ]);
        Role::create([
            'name' => 'eneshial_test',
        ]);
        Role::create([
            'name' => 'fixed',
        ]);
        Role::create([
            'name' => 'advanced_fixed',
        ]);
        Role::create([
            'name' => 'final_test',
        ]);

    }
}
