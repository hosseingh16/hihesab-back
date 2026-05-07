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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name')->nullable();
            $table->string('size')->nullable();
            $table->string('logo')->nullable();
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->string('city_name')->nullable();
            $table->string('address')->nullable();
            $table->string('tel')->nullable();
            $table->foreignId('province_id')->nullable()->constrained('provinces');
            $table->string('province_name')->nullable();
            $table->longText('gallery')->nullable();
            $table->longText('intro')->nullable();
            $table->longText('culture')->nullable();
            $table->longText('advantages')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
