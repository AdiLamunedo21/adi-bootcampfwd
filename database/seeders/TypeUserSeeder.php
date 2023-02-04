<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $type_user = [
            [
                'name' => 'Jantung Sesak',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tekanan Darah Tinggi',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Gangguan Irama Jantung',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        TypeUser::insert($type_user);
    }
}
