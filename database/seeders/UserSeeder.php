<?php

declare(strict_types=1);

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        try {
            $users = File::json(database_path('data/users.json'));
        } catch (Exception) {
            $this->command->info('Users seed data not found, skipping...');

            return;
        }

        if (empty($users)) {
            $this->command->info('Users seed data is empty, skipping...');

            return;
        }

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
