<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Daniel Mundaray',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('26500159')
        ]);

        User::factory(50)->create();
    }
}
