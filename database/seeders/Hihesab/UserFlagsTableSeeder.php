<?php

declare(strict_types=1);

namespace Database\Seeders\Hihesab;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserFlagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = File::get(database_path('seeders/sql/user_flags.sql'));
        DB::unprepared($sql);
    }
}
