<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctorName');
            $table->string('doctorEmail')->unique();
            $table->timestamp('doctorEmail_verified_at')->nullable();
            $table->string('doctorPassword');
            $table->string('officeLocation')->nullable();
            $table->string('officeName')->nullable();
            $table->string('Specialization')->nullable();
            $table->string('license_no');
            $table->rememberToken();
            $table->string('doctorProfile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('doctor_password_reset_tokens', function (Blueprint $table) {
            $table->string('doctorEmail')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('doctor_sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('doctors_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('doctor_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
        Schema::dropIfExists('doctor_password_reset_tokens');
        Schema::dropIfExists('doctor_sessions');
    }
};




