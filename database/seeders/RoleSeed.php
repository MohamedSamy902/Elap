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
            'name' => 'استقبال',
        ]);
        Role::create([
            'name' => 'تست',
        ]);
        Role::create([
            'name' => 'صيانه',
        ]);
        Role::create([
            'name' => 'صيانه متقدمه',
        ]);
    }
}
