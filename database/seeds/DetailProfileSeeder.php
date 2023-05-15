<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([[
            'address' => 'Jember',
            'nomor_tlp' => '08123123123',
            'ttl' => '2000-01-22',
            'foto' => 'picture.png',
        ],
        [
            'address' => 'Kediri',
            'nomor_tlp' => '08123123123',
            'ttl' => '2001-11-11',
            'foto' => 'picture2.png',
        ]]);
    }
}
