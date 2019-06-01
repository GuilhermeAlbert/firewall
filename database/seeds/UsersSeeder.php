<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Administrador',
            'email' => 'adm@frw.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('adm'),
            'access_level_id' => 1,
            'status_id' => 1,
            'permission_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),           
        ];

        User::insert($users);
    }
}
