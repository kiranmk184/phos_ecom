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
        Schema::create('flat_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('product_id')->constrained()->onDelete('cascade');
            $table->string('sku');
            $table->string('product_number');
            $table->string('name');
            $table->text('short_description');
            $table->text('description');
            $table->boolean('new');
            $table->boolean('featured');
            $table->boolean('status');
            $table->decimal('price',12,4)->default(0.0000);
            $table->decimal('cost',12,4)->default(0.0000);
            $table->decimal('special_price',12,4)->default(0.0000);
            $table->date('special_price_from');
            $table->date('special_price_to');
            $table->integer('color');
            $table->string('color_label');
            $table->integer('size');
            $table->string('size_label');
            $table->decimal('weight',12,4)->default(0.0000);
            $table->decimal('width',12,4)->default(0.0000);
            $table->decimal('height',12,4)->default(0.0000);
            $table->decimal('depth',12,4)->default(0.0000);
            $table->string('locale');
            $table->string('channel');
            $table->decimal('min_price',12,4)->default(0.0000);
            $table->decimal('max_price',12,4)->default(0.0000);
            $table->text('meta_keywork');
            $table->text('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flat_products');
        Schema::dropForeign('flat_products_product_id_foreign');
    }
};
