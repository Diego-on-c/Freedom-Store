<?php

use Illuminate\Database\Seeder;

class BunkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bunker::class, 0)->create();
    }
}
