<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populing database with family group
        $groups = [
            [ 
                'title' => 'Residencial',
                'description' => 'Residencial',
                'initial_time' => '00:00',
                'final_time' => '12:00',
                'html_icon' => 'fas fa-home',   
                'selected' => 'true',
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")	 
            ],  
            // Populing database with enterprise group
            [
                'title' => 'Empresa',
                'description' => 'Empresa',
                'initial_time' => '00:00',
                'final_time' => '12:00',
                'html_icon' => 'fas fa-building',  
                'selected' => 'false',
                'status_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")	 
            ],
            [
                'title' => 'Universidade',
                'description' => 'Universidade',
                'initial_time' => '00:00',
                'final_time' => '12:00',
                'html_icon' => 'fas fa-university', 
                'selected' => 'false',
                'status_id' => 2,           
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") 
            ]
        ];
        
        Group::insert($groups);
    }
}
