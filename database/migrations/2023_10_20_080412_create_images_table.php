<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   

    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable();
            $table->string('path');
            $table->timestamp('created-at')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
