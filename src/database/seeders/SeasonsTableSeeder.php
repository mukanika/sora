<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' =>1,
            'name' => '商品名'
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'id' =>2,
            'name' => '値段'
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'id' =>3,
            'name' => '季節'
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'id' =>4,
            'name' => '商品説明'
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'id' =>5,
            'name' => '商品画像'
        ];
        DB::table('seasons')->insert($param);
    }
}
