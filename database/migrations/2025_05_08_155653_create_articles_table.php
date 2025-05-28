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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary')->nullable();

            $table->foreignId('author_id')->constrained(table:'users', indexName:'fk_users_art')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


            $table->timestamp('publication_date')->nullable();
            
           
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('featured_image')->nullable();
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            // $table->integer('comments_count')->default(0);
            $table->string('source_url')->nullable();
            $table->string('source_adress')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
