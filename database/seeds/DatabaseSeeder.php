<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Bunker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(['name'=> 'Diego', 'email'=>'diego@info.com']);
        factory(Bunker::class)->create(['user_id'=>1]);

        factory(User::class, 10)->create()->each(function ($user)
        {
            factory(Bunker::class)->create(['user_id'=>$user->id]);
        });

        $this->call(BunkerSeeder::class);
    }
}
