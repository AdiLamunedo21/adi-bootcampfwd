<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // create data here
        $specialist = [

            [
                'name' => 'Dermatology',
                'price' => '250000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dentist',
                'price' => '450000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Edodontics',
                'price' => '150000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'General Dentistry',
                'price' => '120000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Oral and Maxillofacial Surgery',
                'price' => '80000',

                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),            ],
            [
                'name' => 'Orthodontics',
                'price' => '900000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pediatric Dentistry',
                'price' => '500000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Periodontics',
                'price' => '500000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Prosthodontics',
                'price' => '250000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Radiology',
                'price' => '250000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Surgery',
                'price' => '250000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Urology',
                'price' => '250000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ];

        // this array $specialist will be insert to table 'specialist'
        Specialist::insert($specialist);
    }
}
