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
        $database = 'bookstore';
        
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(false);
            $table->text('author')->nullable(false);
            $table->date('return_date')->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
