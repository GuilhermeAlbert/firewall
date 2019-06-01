<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'app_name' => 'Firewall',
            'locale' => 'pt-br',
            'fallback_locale' => 'en',
            'debug' => 'false',
            'debugbar' => 'false',
            'timezone' => 'UTC',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ];
        
        Setting::insert($settings);
    }
}
