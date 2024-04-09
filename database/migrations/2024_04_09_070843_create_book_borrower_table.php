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
        Schema::create('book_borrower', function (Blueprint $table) {
            $table->foreignId(column:'book_id')->constrained()->onDelete('cascade');
            $table->foreignId(column:'borrower_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('book_borrower');
    }
};
