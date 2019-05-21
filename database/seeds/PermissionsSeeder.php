<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'description' => 'Administrador do sistema',
            'access_level_id' => 1,
            'status_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]); 

        DB::table('permissions')->insert([
            'description' => 'Acesso à visualização',
            'access_level_id' => 2,
            'status_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]); 

        DB::table('permissions')->insert([
            'description' => 'Acesso à visualização e edição',
            'access_level_id' => 2,
            'status_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            	 
        ]); 

        DB::table('permissions')->insert([
            'description' => 'Acesso à visualização, edição e exclusão',
            'access_level_id' => 2,
            'status_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),             
        ]);  
    }
}
