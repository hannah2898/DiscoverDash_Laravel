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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
             // Foreign key column (DestinationID)
             $table->unsignedBigInteger('DestinationID')->nullable(); // DestinationID can be nullable
             $table->foreign('DestinationID')->references('id')->on('destinations')->onDelete('cascade');
 
             // Other columns
             $table->string('Name', 100)->nullable(false); // Name column, maximum length of 100, not nullable
             $table->text('Description')->nullable(); // Description column as text, nullable
             $table->string('Location', 255)->nullable(); // Location column, maximum length of 255, nullable
             $table->string('OpeningHours', 100)->nullable(); // OpeningHours column, maximum length of 100, nullable
             $table->decimal('AdmissionFee', 10, 2)->nullable(); // AdmissionFee column, decimal with precision 10, scale 2, nullable
             $table->string('ImageURL', 255)->nullable(); // ImageURL column, maximum length of 255, nullable
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
