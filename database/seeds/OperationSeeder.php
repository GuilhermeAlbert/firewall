<?php

use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // USER OPERATIONS
        DB::table('operation')->insert([
            'type' => 'add',
            'object' => 'user',
            'description' => 'Adição de usuário',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]); 

        DB::table('operation')->insert([
            'type' => 'edit',
            'object' => 'user',
            'description' => 'Edição de usuário',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]); 
        
        DB::table('operation')->insert([
            'type' => 'list',
            'object' => 'user',
            'description' => 'Visualização de usuário',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);  
        
        DB::table('operation')->insert([
            'type' => 'delete',
            'object' => 'user',
            'description' => 'Exclusão de usuário',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);  
        // USER OPERATIONS     
    }
}
