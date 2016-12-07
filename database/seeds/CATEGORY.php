<?php

use Illuminate\Database\Seeder;

class CATEGORY_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('CATEGORY')->delete();
      DB::table('CATEGORY')->insert([
         'id'=>1,
         'name'=>'小物入れ',
         'images'=>'/images/01.png'
       ]);
      DB::table('CATEGORY')->insert([
         'id'=>2,
         'name'=>'マスキングテープ',
         'images'=>'/images/02.png'
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>3,
         'name'=>'マグカップ',
         'images'=>'/images/03.png'
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>4,
         'name'=>'テーブル',
         'images'=>'/images/04.png'
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>5,
         'name'=>'キャビネット',
         'images'=>'/images/05.png'
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>6,
         'name'=>'置き時計',
         'images'=>'/images/06.png'
      ]);
    }
}
