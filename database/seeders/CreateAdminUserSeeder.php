<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\PermissionCat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        User::truncate();

        $roleadmin = Role::pluck("name");
        $rolle = json_decode($roleadmin);
        $cats = Category::all();
        $user = User::create([
            'name' => 'Mohamed Samy',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'roles_name' => ["admin"],
            'status' => 'مفعل',
        ]);
        if (in_array('admin', $rolle) == 0) {
            $role = Role::create(['name' => 'مدير']);
            $permissions = Permission::pluck('id','id')->all();
            $role->syncPermissions($permissions);
            $user->assignRole([$role->id]);

            foreach ($cats as $cat) {
                $data = [];
                $data['category_id'] = $cat->id;
                $data['user_id'] = $user->id;

                PermissionCat::create($data);
            }
        }else {
            dd('Role Is Exiest');
        }

    }
}
