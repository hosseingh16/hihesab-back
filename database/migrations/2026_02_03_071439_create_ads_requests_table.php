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
        Schema::create('ads_requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('job_id')->constrained('ads');
            $table->foreignId('employer_id')->constrained('users');
            $table->foreignId('company_id')->constrained('companies');
            $table->string('request_date')->nullable();
            $table->string('requested_job_title')->nullable();
            $table->string('interview_date1')->nullable();
            $table->string('interview_time1')->nullable();
            $table->string('interview_date2')->nullable();
            $table->string('interview_time2')->nullable();
            $table->string('interview_tel')->nullable();
            $table->string('interview_address')->nullable();
            $table->string('reject_reasons')->nullable();
            $table->longText('reject_description')->nullable();
            $table->boolean('changeable_interview_date')->nullable()->default(false);
            $table->string('status')->default('waiting');
            $table->boolean('seen')->default(false);
            $table->boolean('archived')->default(false);
            $table->boolean('deleted')->default(false);
            $table->string('communication_type')->nullable();

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
        Schema::dropIfExists('ads_requests');
    }
};
