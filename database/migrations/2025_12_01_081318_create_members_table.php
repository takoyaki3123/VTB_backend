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
        Schema::create('member', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('enName');
            $table->text('desc');
            $table->string('img');
            $table->dateTime('activeDate')->nullable(); // debut date
            $table->json('sns')->nullable(); // sns link {platform: url}
            $table->json('live'); // channel link {platform: url}
            $table->dateTime('ctime')->useCurrent();
            $table->dateTime('utime')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};
