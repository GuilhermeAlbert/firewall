<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissoes')->insert([
            'descricao' => 'Administrador do sistema',
            'nivel' => 'S',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]); 

        DB::table('permissoes')->insert([
            'descricao' => 'Acesso à visualização',
            'nivel' => 'U',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]); 

        DB::table('permissoes')->insert([
            'descricao' => 'Acesso à visualização e edição',
            'nivel' => 'U',
            'status' => 'A',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),            	 
        ]); 

        DB::table('permissoes')->insert([
            'descricao' => 'Acesso à visualização, edição e exclusão',
            'nivel' => 'U',
            'status' => 'A',	
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),             
        ]);                         

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'adm@frw.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('adm'),
            'status' => 'A',
            'nivel' => 'S',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),           
            'id_permissao' => 1,
        ]);    	
    }
}
