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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['EN', 'JP', 'ID', 'CN', 'TW']);
            $table->text('desc');
            $table->string('img');
            $table->string('link')->nullable(); // link to official event website
            $table->dateTime('stime');
            $table->dateTime('etime');
            $table->dateTime('ctime')->useCurrent();
            $table->dateTime('utime')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
