<?php

use Illuminate\Database\Seeder;
use App\Operation;

class OperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operations = [ 
            [
                'type' => 'add',
                'object' => 'user',
                'description' => 'add_user',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'edit',
                'object' => 'user',
                'description' => 'edit_user',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'list',
                'object' => 'user',
                'description' => 'list_user',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'user',
                'description' => 'delete_user',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'group',
                'description' => 'add_group',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'group',
                'description' => 'edit_group',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'group',
                'description' => 'list_group',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'group',
                'description' => 'delete_group',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'preference',
                'description' => 'add_preferences',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'preference',
                'description' => 'edit_preferences',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'preference',
                'description' => 'list_preferences',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'preference',
                'description' => 'delete_preferences',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'settings',
                'description' => 'add_settings',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'settings',
                'description' => 'edit_settings',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'settings',
                'description' => 'list_settings',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'settings',
                'description' => 'delete_settings',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]              
        ];
        
        Operation::insert($operations);
    }
}
