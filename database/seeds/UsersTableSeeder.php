<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([

            'name' => 'juan',
            'userName' => 'wordhome',
            'email' => 'admin@wordhome.info',
            'password' => bcrypt('123456789')
        ]);

           factory(User::class, 10)->create();

    }
}
