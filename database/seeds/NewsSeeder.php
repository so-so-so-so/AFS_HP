<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news_categories')->insert([
        [
            'id'=>'1',
            'name'=>'AEONついに倒産か？？',
        ],
        [
            'id'=>'2',
            'name'=>'AEONクレジットカードに不備が発覚',
        ],
        [
            'id'=>'3',
            'name'=>'たまどら制御不能、爆笑必須！'
        ]
        ]);
    }
}
