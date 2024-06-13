<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_reports', function (Blueprint $table) {
            $table->id('patient_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('report_id')->nullable();

            $table->foreign('user_id')->references('id')->on('model_user')->onDelete('cascade');
            $table->foreign('report_id')->references('report_id')->on('reports')->onDelete('cascade');
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
        Schema::dropIfExists('patient_reports');
    }
}

