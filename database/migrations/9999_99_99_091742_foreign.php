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
        Schema::table('event', function (Blueprint $table) {
            //
            $table->foreignId('gid')->constrained('group', 'id');
        });
        Schema::table('member', function (Blueprint $table) {
            //
            $table->foreignId('gid')->constrained('group', 'id');
        });
        Schema::table('applyList', function (Blueprint $table) {
            //
            $table->foreignId('uid')->constrained('users', 'id');
            $table->foreignId('applyer')->nullable()->constrained('users', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event', function (Blueprint $table) {
            //
            $table->dropForeign('event_gid_foreign');
        });
        Schema::table('member', function (Blueprint $table) {
            //
            $table->dropForeign('member_gid_foreign');
        });
        Schema::table('applyList', function (Blueprint $table) {
            //
            $table->dropForeign('applylist_uid_foreign');
            $table->dropForeign('applylist_applyer_foreign');
        });
    }
};
