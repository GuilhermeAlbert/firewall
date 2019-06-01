<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'description' => 'Administrador do sistema',
                'access_level_id' => 1,
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'description' => 'Acesso à visualização',
                'access_level_id' => 2,
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),	 
            ],
            [
                'description' => 'Acesso à visualização e edição',
                'access_level_id' => 2,
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),            	 
            ],
            [
                'description' => 'Acesso à visualização, edição e exclusão',
                'access_level_id' => 2,
                'status_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ]
        ];  

        Permission::insert($permissions);
    }
}
