<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
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
<<<<<<< HEAD
            RolSeeder::class
        ]);
        User::create([
            'dni' => '1754052718',
            'name' => 'Anthony Santillan',
            'phone' => '0987295505',
            'password' => bcrypt('123456789')

        ])->assignRole('Admin');
=======
            SeederTablePermission::class
        ]);
        // \App\Models\User::factory(10)->create();
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
    }
}
