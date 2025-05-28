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
        Schema::create('art_tag_pivots', function (Blueprint $table) {
            $table->id();

            $table->foreignId('article_id')
                  ->constrained(table:'articles', indexName:'fk_tagpivotart')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->foreignId('tag_id')
                  ->constrained(table:'tags', indexName:'fk_tagpivottag')
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
        Schema::dropIfExists('art_tag_pivots');
    }
};
