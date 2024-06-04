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
        Schema::table('commentaire', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propriete_id');
            $table->foreignId('propriete_id')->constrained('proprietes')->onDelete('cascade');
            $table->string('nom_auteur');
            $table->text('contenu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaire', function (Blueprint $table) {
            $table->DropForeign('commentaires_article_id_foreign');
            $table->dropcolumn('article_id');
        });

        Schema::dropIfExists('commentaires');
    }
};
