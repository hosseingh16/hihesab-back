<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Add indexes for columns used in filters, sorts, and soft deletes.
     * Foreign keys are already indexed by the DB (foreignId()->constrained()).
     */
    public function up(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('created_at');
            $table->index('checked_at');
        });

        Schema::table('ads_requests', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('created_at');
            $table->index('status');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('type');
            $table->index('checked_at');
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('created_at');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->index('deleted_at');
            $table->index('created_at');
        });

        foreach (['cities', 'provinces', 'regions', 'resume_personals', 'user_flags'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->index('deleted_at');
            });
        }
    }

    public function down(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['created_at']);
            $table->dropIndex(['checked_at']);
        });
        Schema::table('ads_requests', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['created_at']);
            $table->dropIndex(['status']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['type']);
            $table->dropIndex(['checked_at']);
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['created_at']);
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->dropIndex(['deleted_at']);
            $table->dropIndex(['created_at']);
        });
        foreach (['cities', 'provinces', 'regions', 'resume_personals', 'user_flags'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropIndex(['deleted_at']);
            });
        }
    }
};
