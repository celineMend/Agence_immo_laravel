<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->renameColumn('utilisateur_id', 'user_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->renameColumn('user_id', 'utilisateur_id');
        });

    }
};
