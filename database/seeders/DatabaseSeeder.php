<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Admin::truncate();
        Teacher::truncate();
        User::truncate();
        Setting::truncate();


        $admin = Admin::factory(1)->create();
        $teacher = Teacher::factory(15)->create();
        $user = User::factory(50)->create();
        Setting::factory(1)->create();

    }
}
