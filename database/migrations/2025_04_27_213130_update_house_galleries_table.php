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
        Schema::table('house_galleries', function (Blueprint $table) {
            //
            $table->dropColumn('imageDes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('house_galleries', function (Blueprint $table) {
            //
            $table->string('imageDes')->nullable();
        });
    }
};
