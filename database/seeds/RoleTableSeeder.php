<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('Role')->insert([
          'name' => 'costumer',
          'display_name' => 'costumer',
          'description' => 'costumer',
      ]);

      DB::table('Role')->insert([
          'name' => 'admin',
          'display_name' => 'admin',
          'description' => 'admin',
      ]);
    }
}
