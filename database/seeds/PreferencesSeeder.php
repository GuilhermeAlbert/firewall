<?php

use Illuminate\Database\Seeder;
use App\Preference;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preference = [
            'locale' => 'pt-br',
            'receive_log_mails' => 'true',
            'user_id' => 1,
            'status_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ];

        Preference::insert($preference); 
    }
}
