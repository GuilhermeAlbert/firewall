<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'description' => 'Active',
                'status' => "Active",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ],
            [
                'description' => 'Inactive',
                'status' => "Active",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ],
            [
                'description' => 'Excluded',
                'status' => "Active",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),             
            ]
        ];

        Status::insert($status);
    }
}
