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
        Schema::table('universite', function (Blueprint $table) {
            $table->string('addresse')->nullable()->after('image_path');
            $table->string('contact')->nullable()->after('addresse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universite', function (Blueprint $table) {
            $table->dropColumn('addresse');
            $table->dropColumn('contact');
        });
    }
};
