<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('foreign_email');
            $table->foreign('foreign_email')->on('users')->references('email');
            $table->string('user_id');
            $table->string('order_id');
            $table->string('txn_id');
            $table->string('txn_amount');
            $table->string('payment_mode');
            $table->string('currency');
            $table->string('txn_date');
            $table->string('status');
            $table->string('resp_code');
            $table->string('resp_msg');
            $table->string('bank_txn_id');
            $table->string('bank_name');
            $table->string('checksum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
