<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained('companies');
            $table->string('title')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_type')->nullable();
            $table->string('company_size')->nullable();
            $table->longText('company_description')->nullable();
            $table->string('owner_cellphone')->nullable();
            $table->string('category')->nullable();
            $table->string('city')->nullable();
            $table->string('city_name')->nullable();
            $table->string('province')->nullable();
            $table->string('province_name')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('salary')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('company_advantages')->nullable();
            $table->string('job_hours')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('job_terms')->nullable();
            $table->longText('skills_required')->nullable();
            $table->longText('job_tasks')->nullable();
            $table->longText('job_benefits')->nullable();
            $table->longText('positives')->nullable();
            $table->longText('negatives')->nullable();
            $table->longText('resume_terms')->nullable();
            $table->string('minimum_work_experience')->nullable();
            $table->string('max_age')->nullable();
            $table->string('gender')->nullable();
            $table->string('minimum_degree')->nullable();
            $table->string('military_service_status')->nullable();
            $table->string('company_software')->nullable();
            $table->string('excel_skill')->nullable();
            $table->string('maliat_skill')->nullable();
            $table->string('bimeh_skill')->nullable();
            $table->string('baha_skill')->nullable();
            $table->string('sorat_skill')->nullable();
            $table->string('bazargani_skill')->nullable();
            $table->string('hesabdar')->nullable();
            $table->string('onsite_days')->nullable();
            $table->string('onsite_hours')->nullable();
            $table->string('status')->nullable();
            $table->boolean('hired')->default(false);
            $table->string('type')->nullable();
            $table->boolean('paid')->default(false);
            $table->boolean('refunded')->default(false);
            $table->boolean('refundable')->default(true);
            $table->boolean('verified')->default(false);
            $table->boolean('expired')->default(false);
            $table->string('publish_date')->nullable();
            $table->string('publish_date_fa')->nullable();
            // `company_id` bigint(20) UNSIGNED NOT NULL,
            // `order_id` bigint(20) UNSIGNED DEFAULT NULL,
            // `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `owner_cellphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `province_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `employment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `salary_range` tinyint(4) DEFAULT NULL,
            // `company_advantages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `job_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `job_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `job_terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `skills_required` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `job_tasks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `job_benefits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `positives` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `negatives` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `resume_terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `minimum_work_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `max_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `minimum_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `military_service_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `company_software` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `excel_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `maliat_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `bimeh_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `baha_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `sorat_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `bazargani_skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `hesabdar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `onsite_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `onsite_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `hired` tinyint(4) DEFAULT 0,
            // `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `paid` tinyint(4) DEFAULT 0,
            // `refunded` tinyint(4) DEFAULT 0,
            // `refundable` tinyint(4) DEFAULT 1,
            // `verified` tinyint(4) DEFAULT 0,
            // `expired` tinyint(4) DEFAULT 0,
            // `publish_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            // `publish_date_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,

            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
