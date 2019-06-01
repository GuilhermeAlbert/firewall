<?php

use Illuminate\Database\Seeder;
use App\Operation;

class OperationSeeder extends Seeder
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
                'description' => 'Adição de usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'edit',
                'object' => 'user',
                'description' => 'Edição de usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'list',
                'object' => 'user',
                'description' => 'Visualização de usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'user',
                'description' => 'Exclusão de usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'group',
                'description' => 'Adição de grupo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'group',
                'description' => 'Edição de grupo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'group',
                'description' => 'Visualização de grupo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'group',
                'description' => 'Exclusão de grupo',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'preference',
                'description' => 'Adição de preferências',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'preference',
                'description' => 'Edição de preferências',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'preference',
                'description' => 'Visualização de preferências',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'preference',
                'description' => 'Exclusão de preferências',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'add',
                'object' => 'settings',
                'description' => 'Adição de configurações',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [        
                'type' => 'edit',
                'object' => 'settings',
                'description' => 'Edição de configurações',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [    
                'type' => 'list',
                'object' => 'settings',
                'description' => 'Visualização de configurações',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'type' => 'delete',
                'object' => 'settings',
                'description' => 'Exclusão de configurações',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]              
        ];
        
        Operation::insert($operations);
    }
}
