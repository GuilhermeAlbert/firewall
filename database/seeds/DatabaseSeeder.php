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
        $this->call([
            StatusSeeder::class,
            AccessLevelsSeeder::class,
            PermissionsSeeder::class,
            UsersSeeder::class,
            SettingsSeeder::class,
            PreferencesSeeder::class,
            LanguagesSeeder::class,
            IconsSeeder::class,
            GroupsSeeder::class,
            OperationSeeder::class,
            ModificationLogsSeeder::class,
        ]);           	
    }
}
