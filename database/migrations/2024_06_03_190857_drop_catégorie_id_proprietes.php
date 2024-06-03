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
    {Schema::table('proprietes', function (Blueprint $table) {
        $table->dropColumn('catégorie_id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proprietes', function (Blueprint $table) {
            $table->string('catégorie_id'); // Remarque : vous pouvez remplacer le type de colonne par celui que vous avez supprimé
        });
    }
};
