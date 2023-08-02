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
        Schema::create('transactions', function (Blueprint $table) {
          $table->id();
          $table->string('payment_gateway');
          $table->integer('transaction_id');
          $table->string('token_requester_id');
          $table->string('expiry_token');
          $table->boolean('consent_flag');
          $table->integer('mcc');
          $table->boolean('web_mobile');
          $table->string('transaction_status');
          $table->string('transaction_date');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
