<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        $this->call([

            PermissionSeeder::class,
            RoleSeeder::class,
            CompanySeeder::class,
        ]);
        $u = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('1234'),
            'full_name' => 'Marcin Admin',
        ]);
        $u->assignRole('admin');

        $ua = User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('1234'),
            'full_name' => 'Marcin User',
        ]);
        $ua->assignRole('user');
    }
}
