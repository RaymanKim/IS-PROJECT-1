<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class AddAppointmentsTable extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users');
            // $table->unsignedBigInteger('doctor_id');
            $table->dateTime('booked_at');
            $table->string('status')->default('open');
            $table->text('action_data')->nullable();
            $table->string('payment_status')->default('pending');
            $table->timestamps();
        });
        Schema::table('appointments', function (Blueprint $table) {

            // $table->foreign('doctor_id')->references('doctor_id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
