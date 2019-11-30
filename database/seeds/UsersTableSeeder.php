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
        factory(App\User::class)->create(['name'=>'noelia','email'=>'noemorlio@gmail.com', 'is_admin'=>true]);
        factory(App\User::class,10)->create();
    }
}
