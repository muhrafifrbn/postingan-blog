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
            $table->string("title");
            // schema to table user
            $table->foreignId('author_id')
            ->constrained(table:"users")
            ->onUpdate('cascade')
            ->onDelete('cascade');
            // schema to table category
            $table->foreignId('category_id')
            ->constrained(table:"categories")
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string("slug")->unique();
            $table->text("body");
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
