<?php

declare(strict_types=1);

namespace Database\Seeders\Hihesab;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ResumeSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = File::get(database_path('seeders/sql/resume_skills.sql'));
        DB::unprepared($sql);
    }
}
