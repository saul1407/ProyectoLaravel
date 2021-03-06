<?php

use App\Entry;
use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = App\User::all();

        $users->each(function ($user){

            factory(Entry::class, 10)->create([

                'user_id' => $user->id
            ]);

        });
    }
}
