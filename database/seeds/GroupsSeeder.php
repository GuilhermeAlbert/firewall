<?php

use Illuminate\Database\Seeder;

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
        DB::table('groups')->insert([
            'title' => 'Família',
            'description' => 'Família',
            'initial_time' => '00:00',
            'final_time' => '12:00',
            'html_icon' => 'fas fa-home',   
            'selected' => 'true',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]);  

        // Populing database with enterprise group
        DB::table('groups')->insert([
            'title' => 'Empresa',
            'description' => 'Empresa',
            'initial_time' => '00:00',
            'final_time' => '12:00',
            'html_icon' => 'fas fa-building',            
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]);  
        
        // Populing database with university group
        DB::table('groups')->insert([
            'title' => 'Universidade',
            'description' => 'Universidade',
            'initial_time' => '00:00',
            'final_time' => '12:00',
            'html_icon' => 'fas fa-university',            
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]);          
    }
}
