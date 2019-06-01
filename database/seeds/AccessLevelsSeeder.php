<?php

use Illuminate\Database\Seeder;
use App\AccessLevel;

class AccessLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $access_levels = [
            [
                'description' => 'System',
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ],
            [
                'description' => 'User',
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ]
        ];       
        
        AccessLevel::insert($access_levels);
    }
}
