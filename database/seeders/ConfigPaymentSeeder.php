<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;


class ConfigPaymentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', // vat is percentage
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        ConfigPayment::insert($config_payment);
    }
}
