<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (json_decode(file_get_contents(database_path('seeders/users.json')), true) as $user) {
            if (User::where('email', $user['email'])->exists()) {
                continue;
            }
            User::firstOrCreate($user);
        }
    }
}
