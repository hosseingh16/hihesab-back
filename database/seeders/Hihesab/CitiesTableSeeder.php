<?php

declare(strict_types=1);

namespace Database\Seeders\Hihesab;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = File::get(database_path('seeders/sql/cities.sql'));
        DB::unprepared($sql);
    }
}
