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
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignUuid('product_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('customer_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('rating');
            $table->text('comment')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reviews');
        Schema::dropForeign('product_reviews_product_id_foreign');
        Schema::dropForeign('product_reviews_customer_id_foreign');
    }
};
