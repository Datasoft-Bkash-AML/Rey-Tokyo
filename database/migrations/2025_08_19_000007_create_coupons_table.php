<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 50)->unique();
            $table->enum('discount_type', ['percent','fixed']);
            $table->decimal('discount_value', 10, 2);
            $table->integer('usage_limit')->unsigned()->nullable();
            $table->integer('used_count')->unsigned()->default(0);
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->useCurrent();
        });
    }
    public function down() {
        Schema::dropIfExists('coupons');
    }
};
