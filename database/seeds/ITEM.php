<?php

use Illuminate\Database\Seeder;

class ITEM_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ITEM')->delete();
      DB::table('ITEM')->insert([
         'id'=>1,
         'name'=>'トゥインクルボックスフルール',
         'price'=>650,
         'categoryID'=>1
       ]);
      DB::table('ITEM')->insert([
         'id'=>2,
         'name'=>'グレース',
         'price'=>700,
         'categoryID'=>1
      ]);
      DB::table('ITEM')->insert([
         'id'=>3,
         'name'=>'ブリりアントリングケース',
         'price'=>540,
         'categoryID'=>1
      ]);
      DB::table('ITEM')->insert([
         'id'=>4,
         'name'=>'リボンベル',
         'price'=>680,
         'categoryID'=>1
      ]);
      DB::table('ITEM')->insert([
         'id'=>5,
         'name'=>'FLORA',
         'price'=>250,
         'categoryID'=>2
      ]);
      DB::table('ITEM')->insert([
         'id'=>6,
         'name'=>'Sea',
         'price'=>230,
         'categoryID'=>2
      ]);
      DB::table('ITEM')->insert([
         'id'=>7,
         'name'=>'Gentle_Cats',
         'price'=>240,
         'categoryID'=>2
      ]);
      DB::table('ITEM')->insert([
         'id'=>8,
         'name'=>'RelRABO_cup',
         'price'=>1980,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>9,
         'name'=>'十草マグ',
         'price'=>2500,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>10,
         'name'=>'林檎のマグカップ',
         'price'=>1850,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>11,
         'name'=>'ニット柄レリーフスープマグ',
         'price'=>980,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>12,
         'name'=>'CatFaceMug',
         'price'=>890,
         'categoryID'=>3
       ]);
      DB::table('ITEM')->insert([
         'id'=>13,
         'name'=>'天使のマグカップ',
         'price'=>1280,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>14,
         'name'=>'MovemberMoustacheMug',
         'price'=>1500,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>15,
         'name'=>'イラストマグ',
         'price'=>880,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>16,
         'name'=>'FACE_MUG',
         'price'=>980,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>17,
         'name'=>'フィッシングマグ',
         'price'=>1080,
         'categoryID'=>3
      ]);
      DB::table('ITEM')->insert([
         'id'=>18,
         'name'=>'丸型ローテーブル',
         'price'=>2980,
         'categoryID'=>4
      ]);
      DB::table('ITEM')->insert([
         'id'=>19,
         'name'=>'センターテーブル',
         'price'=>5280,
         'categoryID'=>4
      ]);
      DB::table('ITEM')->insert([
         'id'=>20,
         'name'=>'アンティーク風キャビネット',
         'price'=>4860,
         'categoryID'=>5
      ]);
      DB::table('ITEM')->insert([
         'id'=>21,
         'name'=>'マガジンラック',
         'price'=>5890,
         'categoryID'=>5
      ]);
      DB::table('ITEM')->insert([
         'id'=>22,
         'name'=>'キャビネット',
         'price'=>6870,
         'categoryID'=>5
      ]);
      DB::table('ITEM')->insert([
         'id'=>23,
         'name'=>'ビーチウッド',
         'price'=>730,
         'categoryID'=>6
      ]);
      DB::table('ITEM')->insert([
         'id'=>24,
         'name'=>'アンティーク風置き時計',
         'price'=>760,
         'categoryID'=>6
      ]);
      DB::table('ITEM')->insert([
         'id'=>25,
         'name'=>'ぷっくりキュートな置き時計',
         'price'=>860,
         'categoryID'=>6
      ]);
   }
}
