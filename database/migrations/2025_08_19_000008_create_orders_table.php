<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('guest_email', 150)->nullable();
            $table->decimal('total', 12, 2);
            $table->char('currency', 3)->default('USD');
            $table->enum('status', ['pending','paid','shipped','completed','cancelled','refunded'])->default('pending');
            $table->text('shipping_address')->nullable();
            $table->text('billing_address')->nullable();
            $table->string('payment_method', 50)->nullable();
            $table->string('payment_id', 100)->nullable();
            $table->bigInteger('coupon_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('coupon_id')->references('id')->on('coupons');
        });
    }
    public function down() {
        Schema::dropIfExists('orders');
    }
};
