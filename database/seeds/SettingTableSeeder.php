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
        \DB::table('settings')->insert([
            'setting_key' => 'admin_theme',
            'setting_value' => 'metronic',
            'setting_form_type' => 'text',
            'setting_category' => 'general',
            'setting_label' => 'Admin Theme',
            'setting_description' => 'Admin theme setting'
        ]); 
    }
}
