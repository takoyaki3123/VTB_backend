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
        Schema::create('applyList', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->json('content');
            $table->integer('result')->default(0);
            $table->string('reason')->nullable();
            $table->dateTime('ctime')->useCurrent();
            $table->dateTime('utime')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applyList');
    }
};
