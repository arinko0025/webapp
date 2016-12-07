<?php

use Illuminate\Database\Seeder;

class SLIPITEM_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('SLIPITEM')->delete();
        //
    }
}
