<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    static $datas = [
        [
            '1', 
            'Devwev Soluções em TI', 
            'devwev', 
            '$2y$10$0U.MpnkcUIPDCOxVLO9aSu5wVsGIvMSTNmhzn6jlcEkIBOZ0lfbEG', 
            'marcelo@devwev.com.br',
            '1'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$datas as $data){
            DB::table('user')->insert([
                'id' => $data[0],
                'name' => $data[1],
                'user' => $data[2],
                'password' => $data[3],
                'email' => $data[4],
                'usertype_id' => $data[5]
            ]);
        }
    }
}
