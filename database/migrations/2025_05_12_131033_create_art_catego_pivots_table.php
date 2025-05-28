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
        Schema::create('art_catego_pivots', function (Blueprint $table) {
            $table->id();


            $table->foreignId('article_id')->constrained(table:'articles', indexName:'fk_artcategopivot')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreignId('actu_catego_id')->constrained(table:'actu_categos', indexName:'fk_actucatpivot')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('art_catego_pivots');
    }
};
