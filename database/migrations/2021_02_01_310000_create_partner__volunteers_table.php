<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_volunteers', function (Blueprint $table) {
            $table->bigInteger('partner_id')->unsigned();
            $table->bigInteger('volunteer_id')->unsigned();

            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner__volunteers');
    }
}
