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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('appointment_date');
            $table->string('customer_mail');
            $table->string('appointment_status_id');
            $table->bigInteger('doctor_id')->unsigned();
            $table->bigInteger('patient_id')->unsigned();
            $table->string('customer_full_name');
            $table->text('customer_message');
            $table->timestamps();
            $table->foreign('appointment_status_id')->references('id')->on('appointment_status');
            $table->foreign('id')->references('doctor_id')->on('appointment');
            $table->foreign('id')->references('patient_id')->on('appointment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
