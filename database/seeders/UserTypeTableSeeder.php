<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    static $datas = [
        [1, 'Administrador'],
        [2, 'Editor']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$datas as $data){
            DB::table('usertype')->insert([
                'id' => $data[0],
                'type' => $data[1]
            ]);
        }
    }
}
