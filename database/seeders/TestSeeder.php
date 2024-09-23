<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::factory()->create([
            'testfield' => 'Тестовое значение тестового поля',
            'testfield2' => 'Тестовое значение тестового поля 2',
            'testfield3' => 123
        ]);

        Test::factory()->create([
            'testfield' => '(2)Тестовое значение тестового поля',
            'testfield2' => '(2)Тестовое значение тестового поля 2',
            'testfield3' => 2123
        ]);

        Test::factory()->create([
            'testfield' => '(3)Тестовое значение тестового поля',
            'testfield2' => '(3)Тестовое значение тестового поля 2',
            'testfield3' => 3123
        ]);

        Test::factory(10)->create();
    }
}
