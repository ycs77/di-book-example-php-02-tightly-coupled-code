<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => '測試',
            'email' => 'test@email.com',
            'is_preferred_customer' => true,
        ]);
    }
}
