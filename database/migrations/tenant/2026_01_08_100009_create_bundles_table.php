<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bundles', function (Blueprint $table) {
            $table->id();

            $table->ulid('public_id')->unique();
            $table->string('name');
            $table->string('slug')->unique();

            $table->string('price_type')->default('fixed'); // fixed/derived
            $table->decimal('fixed_price', 12, 2)->nullable();

            $table->string('status')->default('draft'); // draft/active/archived

            $table->timestamps();
            $table->softDeletes();

            $table->index(['status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bundles');
    }
};
