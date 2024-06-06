<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_data', function (Blueprint $table) {
            $table->id('data_id');
            $table->unsignedBigInteger('report_id');
            $table->string('filepath');
            $table->timestamps();

            $table->foreign('report_id')->references('report_id')->on('reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_data');
    }
}
