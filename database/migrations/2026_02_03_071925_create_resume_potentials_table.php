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
        Schema::create('resume_potentials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->longText('financial_background')->nullable();
            $table->integer('value_added_tax_score')->nullable();
            $table->integer('article_169_score')->nullable();
            $table->integer('terminals')->nullable();
            $table->integer('performance_tax_score')->nullable();
            $table->integer('personal_insurance_score')->nullable();
            $table->integer('contract_insurance_score')->nullable();
            $table->longText('insurance_responsibilities')->nullable();
            $table->string('accounting_section')->nullable();
            $table->string('accounting_softwares')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->integer('financial_manager')->nullable();
            $table->integer('flat_cost')->nullable();
            $table->integer('contract_accounting')->nullable();
            $table->integer('financial_statements_score')->nullable();
            $table->string('consult_fields')->nullable();

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
        Schema::dropIfExists('resume_potentials');
    }
};
