<?php

namespace Database\Seeders;

use App\Models\Todo;
use Faker\Factory;
use Illuminate\Database\Seeder;

class Todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 할일 30개 만들어 넣기
        Todo::factory()
            ->times(30)
            ->create();
    }
}
