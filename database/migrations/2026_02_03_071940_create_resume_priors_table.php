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
        Schema::create('resume_priors', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->string('company_name')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('activity_type')->nullable();
            $table->string('start_month')->nullable();
            $table->integer('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->integer('end_year')->nullable();
            $table->boolean('still_busy')->nullable();
            $table->string('last_salary')->nullable();
            $table->string('leaving_reason')->nullable();
            $table->longText('description')->nullable();

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
        Schema::dropIfExists('resume_priors');
    }
};
