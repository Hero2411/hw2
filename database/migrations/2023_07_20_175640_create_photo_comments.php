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
        Schema::create('photo_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('photo_id')->foreign('photo_id')->references('id')->on('photos');;
            $table->string('comment_text');
            $table->date('comment_date');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_comments');
    }
};
