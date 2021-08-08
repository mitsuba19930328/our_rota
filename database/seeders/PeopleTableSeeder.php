<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'RUI',
            'stock' => 0,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'DIANA',
            'stock' => 0,
        ];
        DB::table('people')->insert($param);
    }
}
