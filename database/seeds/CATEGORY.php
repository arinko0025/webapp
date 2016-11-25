<?php

use Illuminate\Database\Seeder;

class CATEGORY extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('CATEGORY')->insert([
         'id'=>1,
         'name'=>'小物入れ',
       ]);
      DB::table('CATEGORY')->insert([
         'id'=>2,
         'name'=>'マスキングテープ',
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>3,
         'name'=>'マグカップ',
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>4,
         'name'=>'テーブル',
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>5,
         'name'=>'キャビネット',
      ]);
      DB::table('CATEGORY')->insert([
         'id'=>6,
         'name'=>'置き時計',
      ]);
    }
}
