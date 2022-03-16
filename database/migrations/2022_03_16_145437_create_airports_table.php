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
            $table->text("ident")->comment("NA");
            $table->text("type")->comment("NA");
            $table->text("name")->comment("NA");
            $table->text("elevation_ft")->comment("NA");
            $table->text("continent")->comment("NA");
            $table->text("iso_country")->comment("NA");
            $table->text("iso_region")->comment("NA");
            $table->text("municipality")->comment("NA");
            $table->text("gps_code")->comment("NA");
            $table->text("iata_code")->comment("NA");
            $table->text("local_code")->comment("NA");
            $table->text("coordinates")->comment("NA");
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
