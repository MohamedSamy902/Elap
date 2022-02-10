<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $permissions = [
            'الاقسام',
            'تعديل قسم',
            'اضافه قسم',
            'حذف قسم',

            'المنتجات',
            'اضافه منتج',
            'تعديل منتج',
            'حذف منتج',
            'رفض منتج',
            'اضافه ملاحظه للمنتج',
            'استلام المنتج',
            'تسليم المنتج',
            'تسليم العميل',
            'تم الاصلاح',
            'صيانه متقدمه',

            'موظفين',
            'اضافه موظف',
            'تعديل موظف',
            'حذف موظف',

            'العملاء',
            'اضافه عميل',
            'تعديل عميل',
            'حذف عميل',

            'ادوار الموظفين',
            'اضافه دور',
            'تعديل دور',
            'حذف دور',

            'التقارير',
            'اضافه الموقع',
            'تعديل الموقع',
            'حذف الموقع',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
