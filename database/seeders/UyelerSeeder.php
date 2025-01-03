<?php

namespace Database\Seeders;

use App\Models\Uyeler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UyelerSeeder extends Seeder
{

    public function run(): void
    {
     Uyeler::factory()->count(10)->create();
    }
}
