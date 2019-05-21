<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'description' => 'Active',
            'status' => "Active",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),             
        ]); 

        DB::table('status')->insert([
            'description' => 'Inactive',
            'status' => "Active",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),             
        ]); 
        
        DB::table('status')->insert([
            'description' => 'Excluded',
            'status' => "Active",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),             
        ]);         
    }
}
