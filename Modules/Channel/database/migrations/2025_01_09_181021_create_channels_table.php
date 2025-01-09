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
        Schema::create('channels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('hostname')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('timezone')->nullable();
            $table->int('default_locale_id')->nullable();
            $table->boolean('is_maintenance_on')->default(0);
            $table->foreignUuid('root_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
