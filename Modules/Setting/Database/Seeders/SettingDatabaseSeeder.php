<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Unganisha Erp',
            'company_email' => 'unganshanetworks@gmail.com',
            'company_phone' => '0768533585',
            'notification_email' => 'unganshanetworks@gmail.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Unganisha Erp © 2021 || Developed by <strong><a target="_blank" href="https://unganishanetworks.com">Unganisha Networks</a></strong>',
            'company_address' => 'Patrose Building, Gikaibei'
        ]);
    }
}
