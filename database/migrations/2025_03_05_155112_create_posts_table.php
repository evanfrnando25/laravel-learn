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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //membuat hubungan dengan table category id
            $table->foreignId('category_id');
            //ini kita menambahkan field title dengan type string
            $table->string('title');
            //ini kita menambahkan field slug dengan type string
            $table->string('slug')->unique();
            //ini kita menambahkan field excerpt dengan type text
            $table->text('excerpt');
            //ini kita menambahkan field body dengan type text
            $table->text('body');
            //ini kita menambahkan field  published_at dengan tipe timestamp dan default nya null
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
