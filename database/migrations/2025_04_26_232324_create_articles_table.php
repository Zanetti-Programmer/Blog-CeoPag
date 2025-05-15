<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('cover')->nullable();
            $table->string('category')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->integer('view')->default(0);
            $table->date('published_at')->nullable();
            $table->timestamps();
        });

        Schema::create('article_developer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            $table->foreignId('developer_id')->constrained()->onDelete('cascade');
            $table->unique(['article_id', 'developer_id']); // evitar duplicatas
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_developer');
        Schema::dropIfExists('articles');
    }
};
