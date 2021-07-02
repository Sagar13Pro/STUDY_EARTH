<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterestDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_details', function (Blueprint $table) {
            $table->id();
            $table->string('interest_fname');
            $table->string('interest_lname');
            $table->string('interest_mail');
            $table->bigInteger('interest_mobile');
            $table->string('interest_address');
            $table->date('interest_dob');
            $table->string('interest_purpose');
            $table->integer('interest_amount');
            $table->string('order_id')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('txn_amount')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('status')->nullable();
            $table->string('txn_date')->nullable();
            $table->string('bank_txn_id')->nullable();
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
        Schema::dropIfExists('interest_details');
    }
}
