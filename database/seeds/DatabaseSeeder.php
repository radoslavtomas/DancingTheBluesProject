<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(CustomPagesTableSeeder::class);
//        $this->call(CustomUsersTableSeeder::class);
        $this->call(CustomSettingsTableSeeder::class);
    }
}
