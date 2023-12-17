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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->string('code')->unique()->nullable();
            //$table->string('product_barcode_symbology')->nullable();
            $table->integer('quantity')->check('quantity >= 0');;
            $table->integer('buying_price')->comment('Buying Price');
            $table->integer('selling_price')->comment('Selling Price');
            $table->text('notes')->nullable();

            $table->foreignIdFor(\App\Models\Category::class)
                ->nullable()
                ->constrained()
//                ->restrictOnDelete();
//                ->cascadeOnDelete();
                ->nullOnDelete();

            $table->foreignIdFor(\App\Models\Unit::class)->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
