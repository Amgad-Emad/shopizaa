<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')->nullable()->constrained('customers')->nullOnDelete();

            $table->string('status')->default('active'); // active/abandoned/converted
            $table->string('currency', 3)->default('EGP');

            $table->timestamp('last_activity_at')->nullable();
            $table->timestamp('abandoned_at')->nullable();
            $table->timestamp('converted_at')->nullable();

            $table->json('meta_json')->nullable(); // utm, device, ip, etc.

            $table->timestamps();

            $table->index(['status']);
            $table->index(['last_activity_at']);
        });

        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts')->cascadeOnDelete();

            $table->string('item_type'); // product_variant/bundle
            $table->unsignedBigInteger('reference_id');

            $table->string('name_snapshot');
            $table->decimal('unit_price', 12, 2);
            $table->unsignedInteger('qty')->default(1);

            $table->timestamps();

            $table->index(['cart_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
    }
};
