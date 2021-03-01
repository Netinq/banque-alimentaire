<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('state_id')->unsigned();
            $table->string('name', 150);
            $table->string('siret', 14)->nullable();
            $table->string('naf', 8)->nullable();
            $table->string('adress');
            $table->string('adress_details');
            $table->string('zip', 5);
            $table->string('city');
            $table->float('lattitude', 10, 8);
            $table->float('longitude', 11, 8);
            $table->string('contact', 150);
            $table->integer('max_volunteers')->unsigned();
            $table->integer('actual_volunteers')->unsigned();
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
