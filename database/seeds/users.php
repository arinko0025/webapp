<?php

use Illuminate\Database\Seeder;

class users_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      DB::table('users')->delete();
      //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');
      for($i=1; $i<=15; $i++)
      {
        DB::table('users')->insert([
            'id'=>$i,
            'name'=>$faker->name(),
            'email'=>$i.$faker->email(),
            'password'=>$faker->password(),
            'sex'=>$faker->boolean(),
            'address'=>$faker->address(),
            'tel'=>$faker->randomDigit(),
        ]);
      }
    }
}
