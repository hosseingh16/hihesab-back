<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\Hihesab\AccountingProgramsTableSeeder;
use Database\Seeders\Hihesab\AdsRequestsTableSeeder;
use Database\Seeders\Hihesab\AdsTableSeeder;
use Database\Seeders\Hihesab\CitiesTableSeeder;
use Database\Seeders\Hihesab\CompaniesTableSeeder;
use Database\Seeders\Hihesab\OrdersTableSeeder;
use Database\Seeders\Hihesab\ProvincesTableSeeder;
use Database\Seeders\Hihesab\QuotesTableSeeder;
use Database\Seeders\Hihesab\RegionsTableSeeder;
use Database\Seeders\Hihesab\ResumeEducationsSeeder;
use Database\Seeders\Hihesab\ResumePersonalsSeeder;
use Database\Seeders\Hihesab\ResumePotentialsSeeder;
use Database\Seeders\Hihesab\ResumePriorsTableSeeder;
use Database\Seeders\Hihesab\ResumeSkillsTableSeeder;
use Database\Seeders\Hihesab\SoftwareSkillsTableSeeder;
use Database\Seeders\Hihesab\UserFlagsTableSeeder;
use Database\Seeders\Hihesab\UsersTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CompaniesTableSeeder::class,
            AdsTableSeeder::class,
            ResumeEducationsSeeder::class,
            ResumePersonalsSeeder::class,
            ResumePotentialsSeeder::class,
            ResumePriorsTableSeeder::class,
            ResumeSkillsTableSeeder::class,
            SoftwareSkillsTableSeeder::class,
            UserFlagsTableSeeder::class,
            OrdersTableSeeder::class,
            RegionsTableSeeder::class,
            AdsRequestsTableSeeder::class,
            QuotesTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class,
            AccountingProgramsTableSeeder::class,
        ]);
    }
}
