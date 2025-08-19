<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200);
            $table->string('slug', 220)->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->decimal('price', 12, 2);
            $table->char('currency', 3)->default('USD');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_new')->default(false);
            $table->enum('status', ['active','inactive','draft'])->default('active');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }
    public function down() {
        Schema::dropIfExists('products');
    }
};
