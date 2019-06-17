<?php

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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'teacher'
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'teacher'
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'member'
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'member'
        ]);
        DB::table('shifts')->insert([
            'start_time'=>'07:20:00',
            'end_time'=>'09:00:00'
        ]);
        DB::table('courses')->insert([
            'course_name'=>'Web Master'
        ]);
        DB::table('courses')->insert([
            'course_name'=>'Java Programming'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Monday'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Tuesday'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Wednesday'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Thursday'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Friday'
        ]);
        DB::table('days')->insert([
            'day_name'=>'Saturday'
        ]);
    }
}
