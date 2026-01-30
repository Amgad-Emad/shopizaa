<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('discount_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discount_id')->constrained('discounts')->cascadeOnDelete();

            $table->string('applies_to'); // product/category/bundle/entire_store
            $table->unsignedBigInteger('target_id')->nullable(); // depends on applies_to

            $table->json('condition_json')->nullable();

            $table->timestamps();

            $table->index(['discount_id', 'applies_to']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discount_rules');
    }
};
