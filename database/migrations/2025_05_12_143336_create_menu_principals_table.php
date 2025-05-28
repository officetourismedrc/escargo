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
        Schema::create('menu_principals', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('desc');
            $table->enum('status', ['actif', 'non-actif'])->default('actif');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_principals');
    }
};
