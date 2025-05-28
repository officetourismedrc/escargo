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
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('desc');

            $table->foreignId('menu_principal_id')
            ->constrained(table:'menu_principals', indexName:'fk_menuprinsubmenu')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->enum('status', ['actif', 'non-actif'])->default('actif');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_menus');
    }
};
