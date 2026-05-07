<?php

declare(strict_types=1);

use App\Enums\Status;
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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('default_image')->nullable();
            $table->string('tablet_image')->nullable();
            $table->string('mobile_image')->nullable();

            $table->dateTime('active_from')->default(now());
            $table->dateTime('active_until')->nullable();

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('background_color')->nullable();
            $table->string('button_title')->nullable();
            $table->string('button_subtitle')->nullable();
            $table->string('button_color')->nullable();

            $table->string('status')->default(Status::ACTIVE->value);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
