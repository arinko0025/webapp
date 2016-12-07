<?php

use Illuminate\Database\Seeder;

class CART_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('CART')->delete();
        //
    }
}
