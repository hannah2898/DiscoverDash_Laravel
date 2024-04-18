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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();

             // Columns similar to the 'destination' table in SQL
             $table->string('City', 100)->nullable(false); // City column, maximum length of 100, not nullable
             $table->string('Country', 100)->nullable(false); // Country column, maximum length of 100, not nullable
             $table->text('Description')->nullable(); // Description column as text, nullable
             $table->string('Climate', 100)->nullable(); // Climate column, maximum length of 100, nullable
             $table->string('BestTimeToVisit', 100)->nullable(); // BestTimeToVisit column, maximum length of 100, nullable
             $table->string('ImageURL', 255)->nullable(); // ImageURL column, maximum length of 255, nullable
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
