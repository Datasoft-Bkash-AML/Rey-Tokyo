<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->string('size', 30)->nullable();
            $table->string('color', 30)->nullable();
            $table->string('sku', 50)->unique();
            $table->integer('stock_qty')->unsigned()->default(0);
            $table->decimal('price', 12, 2)->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }
    public function down() {
        Schema::dropIfExists('product_variants');
    }
};
