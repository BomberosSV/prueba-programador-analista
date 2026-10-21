<?php

namespace Database\Seeders;

use App\Models\Provedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Provedor::create([
            'nombre' => 'Test User',
            'telefono' => '78898989',
                        'representante' => 'carlos lopez',
                                    'telefono_representante' => '756757',
        ]);
    }
}
