<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->ulid('public_id')->unique(); // safe external reference
            $table->string('name');
            $table->string('slug')->unique();

            $table->longText('description')->nullable();

            $table->string('status')->default('draft'); // draft/active/archived
            $table->string('product_type')->default('simple'); // simple/variable

            $table->boolean('track_inventory')->default(true);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['status']);
        });

        Schema::create('product_category', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->primary(['product_id', 'category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_category');
        Schema::dropIfExists('products');
    }
};
