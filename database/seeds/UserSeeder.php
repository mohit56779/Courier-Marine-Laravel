<?php

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
        DB :: table('users')->insert([
            'role_id' => 1,
            'name' => 'John Doe',
            'email' => 'john@john.com',
            'username' => 'customer',
            'password' => bcrypt('password'),
        ]);

        DB :: table('users')->insert([
            'role_id' => 2,
            'name' => 'Jane Doe',
            'email' => 'jane@jane.com',
            'username' => 'agent',
            'password' => bcrypt('password'),
        ]);

        DB :: table('users')->insert([
            'role_id' => 1,
            'name' => 'John Doe 2',
            'email' => 'john2@john.com',
            'username' => 'customer2',
            'password' => bcrypt('password'),
        ]);

        DB :: table('users')->insert([
            'role_id' => 2,
            'name' => 'Jane Doe 2',
            'email' => 'jane2@jane.com',
            'username' => 'agent2',
            'password' => bcrypt('password'),
        ]);
    }
}
