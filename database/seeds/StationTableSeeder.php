<?php

use Illuminate\Database\Seeder;

class StationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            
                  [ 'station_name' => 'Gambir' , 'location' => 'Jakarta'],
                  [ 'station_name' => 'Bogor' , 'location' => 'Bogor']
    
                  ];
    
          DB::table('stations')->insert($role);
    }
}
