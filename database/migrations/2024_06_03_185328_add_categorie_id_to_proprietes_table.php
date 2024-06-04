<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCatégorieIdProprietes extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->dropForeign(['catégorie_id']);
            $table->dropColumn('catégorie_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->unsignedBigInteger('catégorie_id')->nullable();
            $table->foreign('catégorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
}
