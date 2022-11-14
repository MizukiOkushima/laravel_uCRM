<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータ作成
        // []を２つで囲うことで複数ダミーデータを作成出来る
        DB::table('items')->insert([
            [
                'name' => 'コーヒー',
                'memo' => 'ITスペシャリスト専用の飲み物',
                'price' => 300
            ],
            [
                'name' => 'おやつ',
                'memo' => 'ITスペシャリスト専用のおやつ',
                'price' => 200
            ],
            [
                'name' => '唐揚げ弁当',
                'memo' => 'ITスペシャリスト専用の昼食',
                'price' => 600
            ],
            [
                'name' => 'ペプシコーラ',
                'memo' => 'ITスペシャリスト専用の飲み物',
                'price' => 100
            ],
            [
                'name' => '貸出書籍',
                'memo' => 'だっち先生の私物',
                'price' => 0
            ],
        ]);
    }
}
