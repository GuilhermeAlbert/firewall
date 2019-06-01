<?php

use Illuminate\Database\Seeder;
use App\Icon;

class IconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Child icon
        $icons = [
            [
                'description' => 'Child',
                'unicode' => 'f1ae',
                'html' => 'fas fa-child',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            // Home icon
            [
                'description' => 'Home',
                'unicode' => 'f015',
                'html' => 'fas fa-home',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            // Building icon
            [
                'description' => 'Building',
                'unicode' => 'f1ad',
                'html' => 'fas fa-building',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            // Store icon
            [
                'description' => 'Child',
                'unicode' => 'f54e',
                'html' => 'fas fa-store',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            // University icon
            [
                'description' => 'University',
                'unicode' => 'f19c',
                'html' => 'fas fa-university',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ]
        ];
        
        Icon::insert($icons);
    }
}
