<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Database\Seeders\Catrgory;
use Database\Seeders\RoleSeed;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\CreateAdminUserSeeder;
use Database\Seeders\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();
        // User::truncate();
        // Category::truncate();
        // Role::truncate();
        $this->call(Catrgory::class);
        $this->call(RoleSeed::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
    }
}
