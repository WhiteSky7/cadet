<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Role;
use StatementFactory;

/**
 * Summary of DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::factory()->create(
            [
            'name' => 'user',
            ]
        );

        Role::factory()->create(
            [
            'name' => 'admin',
            ]
        );

         User::factory(10)->hasStatements(3)->create();

        User::factory()->create(
            [
            'name' => 'admin',
            'email' => 'test@example.com',
            'role_id' => 2
             ]
        );

    }
}
