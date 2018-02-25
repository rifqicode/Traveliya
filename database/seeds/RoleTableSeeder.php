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


      $role = [
        
              ['id' => '1' , 'name' => 'costumer' , 'display_name' => 'costumer' , 'description' => 'costumer'],
              ['id' => '2' , 'name' => 'admin' , 'display_name' => 'costumer' , 'description' => 'costumer']

              ];

      DB::table('Roles')->insert($role);
    }
}
