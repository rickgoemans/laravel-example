<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->isProduction()) {
            return;
        }

        /** @var User $adminUser */
        $adminUser = User::factory([
            'name'     => 'Admin',
            'email'    => 'admin@admin.com',
            'password' => 'admin',
        ])
            ->create();

        User::factory()
            ->count(10)
            ->create();
    }
}
