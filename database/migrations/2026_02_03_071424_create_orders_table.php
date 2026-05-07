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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('ad_id')->nullable()->constrained('ads');
            $table->integer('total_price')->nullable();
            $table->integer('total_qty')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('buyer_email')->nullable();
            $table->string('buyer_phone')->nullable();
            $table->string('buyer_cellphone')->nullable();
            $table->string('refId')->nullable();
            $table->string('resCode')->nullable();
            $table->string('orderId')->nullable();
            $table->string('referenceId')->nullable();
            $table->string('cardNo')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('error_message')->nullable();

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
        Schema::dropIfExists('orders');
    }
};
