<?php

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
        factory(App\User::class, 20)->create();

        App\User::create([
           'name'   => 'Prosper NGOUARI',
            'email' => 'prospser@gmail.com',
            'password'  => bcrypt('123')
        ]);
    }
}
