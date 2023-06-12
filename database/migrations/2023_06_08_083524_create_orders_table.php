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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('receiver_name');
            $table->string('receiver_number');
            $table->string('receiver_address');
            $table->string('receiver_city');
            $table->string('receiver_state');
            $table->string('receiver_zip_code');
            $table->string('sender_name');
            $table->string('sender_number');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('sender_city');
            $table->string('sender_state');
            $table->string('sender_zip_code');
            $table->string('delivery_options');
            $table->integer('fee');
            $table->string('item_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('item_category');
            $table->float('weight');
            $table->float('item_value');
            $table->string('bags_specification');
            $table->text('remarks')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
