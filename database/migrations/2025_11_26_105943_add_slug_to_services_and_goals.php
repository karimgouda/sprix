<?php

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
        Schema::table('services_menus', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });

        Schema::table('goals', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('goals', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
