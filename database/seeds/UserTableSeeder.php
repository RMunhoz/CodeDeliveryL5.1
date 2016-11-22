<?php

use CodeDelivery\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Rogerio Munhoz',
            'email' => 'rogerio_munhoz@hotmail.com.br',
            'password' => Hash::make(123456),
        ]);
        factory(User::class, 9)->create();
    }
}
