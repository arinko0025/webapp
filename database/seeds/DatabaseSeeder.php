<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CATEGORY_SEEDER::class);
        $this->call(CART_SEEDER::class);
        $this->call(ITEM_SEEDER::class);
        $this->call(ITEMIMAGE_SEEDER::class);
        $this->call(SLIP_SEEDER::class);
        $this->call(SLIPITEM_SEEDER::class);
        $this->call(users_SEEDER::class);
    }
}
