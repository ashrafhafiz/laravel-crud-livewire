<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string("ident")->comment("NA");
            $table->string("type")->comment("NA");
            $table->string("name")->comment("NA");
            $table->string("elevation_ft")->comment("NA");
            $table->string("continent")->comment("NA");
            $table->string("iso_country")->comment("NA");
            $table->string("iso_region")->comment("NA");
            $table->string("municipality")->comment("NA");
            $table->string("gps_code")->comment("NA");
            $table->string("iata_code")->comment("NA");
            $table->string("local_code")->comment("NA");
            $table->point("coordinates")->comment("NA");
            $table->softDeletes();
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
        Schema::dropIfExists('airports');
    }
}
