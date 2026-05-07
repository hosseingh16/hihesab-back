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
        Schema::create('resume_personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('cellphone')->nullable();
            $table->foreignId('province_id')->nullable()->constrained('provinces');
            $table->string('province_name')->nullable();
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->string('city_name')->nullable();
            $table->foreignId('region_id')->nullable()->constrained('regions');
            $table->string('region_name')->nullable();
            $table->string('address')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('military_service_status')->nullable();
            $table->longText('about')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('wanted_job')->nullable();
            $table->string('job_title')->nullable();
            $table->string('desired_salary')->nullable();
            $table->integer('salary_range')->nullable();
            $table->integer('job_status')->nullable();
            $table->string('work_experience')->nullable();

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
        Schema::dropIfExists('resume_personals');
    }
};
