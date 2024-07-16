<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreatePatientActionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('consultation_id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('consultation_id')->references('id')->on('appointments')->onDelete('cascade');
            $table->string('action_type');
            $table->text('action_data')->nullable();
            // $table->timestamp('created_at')->nullable();
            $table->timestamps();
        });
        Schema::table('patient_actions', function (Blueprint $table) {

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_actions');
    }
};
