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
        Schema::create('book__borrowers', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column:'books_id')->constrained()->onDelete('cascade');
            $table->foreignId(column:'borrowers_id')->constrained()->onDelete('cascade');
            $table->date('borrowed_date');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book__borrowers');
    }
};
