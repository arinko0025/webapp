<?php

use Illuminate\Database\Seeder;

class SLIP_SEEDER extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('SLIP')->delete();
        //
    }
}
