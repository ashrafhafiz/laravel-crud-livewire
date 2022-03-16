<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("alpha_2");
            $table->text("alpha_3");
            $table->text("country_code");
            $table->text("iso_3166_2");
            $table->text("region");
            $table->text("sub_region");
            $table->text("intermediate_region");
            $table->text("region_code");
            $table->text("sub_region_code");
            $table->text("intermediate_region_code");
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
        Schema::dropIfExists('countries');
    }
}
