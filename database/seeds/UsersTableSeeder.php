<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'travel.master',
          'email' => 'travel.master@gmail.com',
          'password' => bcrypt('traveliya'),
          'level' => 0,
          'verify' =>0,
      ]);
    }
}
