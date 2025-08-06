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
        Schema::create('items', function (Blueprint $table) {
            $table->id('itemCode');
            $table->unsignedBigInteger('ID_rak'); // foreign key
            $table->string('dscription', 20);
            $table->string('codeBars', 20);
            $table->string('category');
            $table->timestamps();

            $table->foreign('ID_rak')->references('ID_rak')->on('rak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
