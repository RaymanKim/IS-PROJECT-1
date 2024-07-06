<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreateIllnessTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('illness', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('symptom_one');
            $table->text('symptom_two');
            $table->text('remedy_one');
            $table->text('remedy_two');
            $table->text('specialist_one');
            $table->text('specialist_two');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('illness');
    }
};
