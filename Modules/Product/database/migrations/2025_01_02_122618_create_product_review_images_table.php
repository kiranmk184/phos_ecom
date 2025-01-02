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
        Schema::create('product_review_images', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('product_review_id')->constrained()->onDelete('cascade');
            $table->string('type')->nullable();
            $table->string('path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_review_images');
        Schema::dropForeign('product_review_images_product_review_id_foreign');
    }
};
