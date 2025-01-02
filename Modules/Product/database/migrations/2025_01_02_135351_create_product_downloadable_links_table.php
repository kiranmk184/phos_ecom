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
        Schema::create('product_downloadable_links', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignUuid('product_id')->constrained()->onDelete('cascade');
            $table->string('url');
            $table->string('file');
            $table->string('file_name');
            $table->string('type');
            $table->decimal('price', 12,4)->default(0.0000);
            $table->string('sample_url')->nullable();
            $table->string('sample_file');
            $table->string('sample_file_name');
            $table->string('sample_type');
            $table->integer('downloads')->default(0);
            $table->integer('sort_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_downloadable_links');
        Schema::dropForeign('product_downloadable_links_product_id_foreign');
    }
};
