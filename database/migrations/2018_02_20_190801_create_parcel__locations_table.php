<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parcel_id')->unsigned();
            $table->foreign('parcel_id')->unsigned()->references('id')->on('parcels');
            $table->string('location');
            $table->timestamp('date');
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
        Schema::dropIfExists('parcel_locations');
    }
}
