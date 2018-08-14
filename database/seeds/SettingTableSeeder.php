<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => 'Laravel Blog',
            'contact_number' => '+8805424564',
            'contact_email' => 'blog@gmail.com',
            'contact_address' => 'Baker Street London',
        ]);
    }
}
