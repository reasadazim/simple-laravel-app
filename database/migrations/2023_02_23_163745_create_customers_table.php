<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cust_code')->unique();
            $table->string('cust_name');
            $table->string('cust_city');
            $table->string('working_area');
            $table->string('cust_country');
            $table->bigInteger('grade');
            $table->decimal('opening_amt');
            $table->decimal('receive_amt');
            $table->decimal('payment_amt');
            $table->decimal('outstanding_amt');
            $table->string('phone_no');
            $table->string('cust_photo')->nullable();
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
};
