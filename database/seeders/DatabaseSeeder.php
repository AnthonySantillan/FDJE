<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolSeeder::class
        ]);
        User::create([
            'dni' => '1754052718',
            'name' => 'Anthony Santillan',
            'phone' => '0987295505',
            'password' => bcrypt('123456789')

        ])->assignRole('Admin');
    }
}
