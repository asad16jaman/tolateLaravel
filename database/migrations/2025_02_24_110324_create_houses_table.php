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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->enum('type',['family','boys','girls']);
            $table->string('thum');
            $table->integer('price');
            $table->string('numberOfRooms');
            $table->string('numberOfBathRooms');
            $table->string('numberOfBalcony');
            $table->date('availableFrom');
            $table->string('location')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('thana')->nullable();
            $table->string('area')->nullable();
            $table->boolean('gas');
            $table->boolean('internate');
            $table->boolean('left');
            $table->boolean('parking');
            $table->longText('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
