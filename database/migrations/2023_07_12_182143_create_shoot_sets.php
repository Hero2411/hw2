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
        Schema::create('shoot_sets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover_filename');
            $table->string('location');
            $table->date('shoot_date');
            $table->string('subject');
            $table->string('description');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoot_sets');
    }
};
