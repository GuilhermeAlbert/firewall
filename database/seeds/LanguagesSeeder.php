<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'description' => 'Português',
            'fallback_description' => 'Brazillian Portuguese',
            'country' => 'Brazil',
            'initials' => 'pt-br',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]); 

        DB::table('languages')->insert([
            'description' => 'English',
            'fallback_description' => 'American English',
            'country' => 'United States',
            'initials' => 'en',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]); 
        
        DB::table('languages')->insert([
            'description' => 'Español',
            'fallback_description' => 'Spanish',
            'country' => 'Spain',
            'initials' => 'es',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),	 
        ]);         
    }
}
