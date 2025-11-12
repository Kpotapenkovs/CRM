<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $response = Http::get('https://deskplan.lv/muita/app.json');
        $data = $response->json();
        foreach ($data['users'] as $userData) {
            User::create([
                'id' => $userData['id'],
                'username' => $userData['username'],
                'full_name' => $userData['full_name'],
                'role' => $userData['role'],
                'active' => $userData['active'],
            ]);
        }
    }
}
