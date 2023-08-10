<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\position;
use App\Models\departments;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     /*    DB::table('users')->insert([
            'firstname' => 'ekapob',
            'lastname' => 'sesantae',
            'email' => 'admin@admin.com',
            'password' => '123',
            'role_id' => '1',
            'status_user' => '1',
            'tel' => '0835202797',
            'line_token' => '',
            'idcard' => '1101801153512',
            'department_id' => '1',
            'shortname_id' => '1',
            // เพิ่มข้อมูลอื่น ๆ ตามต้องการ
        ]); */
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
       /*  position::create(
            ['positionname' => 'คณบดี',
            'level' => '2',
            ]);
            position::create(
            ['positionname' => 'รองคณบดี',
            'level' => '3',
            ]);
            position::create(
            ['positionname' => 'ผู้ชวยรองคณบดี',
            'level' => '4',
            ]);
            position::create(
            ['positionname' => 'หัวหน้าหน่วย',
            'level' => '4',
            ]);
            position::create(
            ['positionname' => 'หัวสาขา',
            'level' => '5',
            ]);
            position::create(
            ['positionname' => 'เจ้าหน้าที่',
            'level' => '5',
            ]);
            position::create(
            ['positionname' => 'แม่บ้าน',
            'level' => '6',
            ]); 
            departments::create(['departmentname' => 'ทั้งหมด']);
            departments::create(['departmentname' => 'ฝ่ายวิชาการ']);
            departments::create(['departmentname' => 'ฝ่ายบริหาร']);
            departments::create(['departmentname' => 'ฝ่ายกิจกรรมทั่วไป']); */

    }
}
