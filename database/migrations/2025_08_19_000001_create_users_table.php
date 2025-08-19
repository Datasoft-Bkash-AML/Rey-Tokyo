<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('phone', 30)->nullable();
            $table->boolean('is_admin')->default(false);
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('users');
    }
};
