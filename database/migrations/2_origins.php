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
        Schema::create('origins', function (Blueprint $table) {
            $table->id();
            $table->string('index')->unique(); // Уникальное ограничение
            $table->string('name');
            $table->text('description');
            $table->integer('health')->default(20);
            $table->string('food')->default('Всеядные');
            $table->string('average')->nullable();
            $table->string('kindness')->nullable();
            $table->string('evolution')->nullable(); // nullable для внешнего ключа
        });

        Schema::table('origins', function (Blueprint $table) {
            $table->foreign('evolution')
                ->references('index')
                ->on('origins')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origins');
    }
};
