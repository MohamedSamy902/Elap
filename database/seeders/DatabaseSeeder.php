<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $this->call(Catrgory::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleSeed::class);
        $this->call(CreateAdminUserSeeder::class);
    }
}
