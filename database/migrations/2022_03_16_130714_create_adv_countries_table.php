<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adv_countries', function (Blueprint $table) {
            $table->id();
            $table->text("FIFA")->comment("Codes assigned by the Fédération Internationale de Football Association");
            $table->text("Dial")->comment("Country code from ITU-T recommendation E.164, sometimes followed by area code");
            $table->text("ISO3166-1-Alpha-3")->comment("Alpha-3 codes from ISO 3166-1 (synonymous with World Bank Codes)");
            $table->text("MARC")->comment("MAchine-Readable Cataloging codes from the Library of Congress");
            $table->text("is_independent")->comment("Country status, based on the CIA World Factbook");
            $table->text("ISO3166-1-numeric")->comment("Numeric codes from ISO 3166-1");
            $table->text("GAUL")->comment("Global Administrative Unit Layers from the Food and Agriculture Organization");
            $table->text("FIPS")->comment("Codes from the U.S. standard FIPS PUB 10-4");
            $table->text("WMO")->comment("Country abbreviations by the World Meteorological Organization");
            $table->text("ISO3166-1-Alpha-2")->comment("Alpha-2 codes from ISO 3166-1");
            $table->text("ITU")->comment("Codes assigned by the International Telecommunications Union");
            $table->text("IOC")->comment("Codes assigned by the International Olympics Committee");
            $table->text("DS")->comment("Distinguishing signs of vehicles in international traffic");
            $table->text("UNTERM Spanish Formal")->comment("Country's formal Spanish name from UN Protocol and Liaison Service");
            $table->text("Global Code")->comment("Country classification from United Nations Statistics Division");
            $table->text("Intermediate Region Code")->comment("Country classification from United Nations Statistics Division");
            $table->text("official_name_fr")->comment("Country or Area official French short name from UN Statistics Divsion");
            $table->text("UNTERM French Short")->comment("Country's short French name from UN Protocol and Liaison Service");
            $table->text("ISO4217-currency_name")->comment("ISO 4217 currency name");
            $table->text("Developed-Developing Countries")->comment("Country classification from United Nations Statistics Division");
            $table->text("UNTERM Russian Formal")->comment("Country's formal Russian name from UN Protocol and Liaison Service");
            $table->text("UNTERM English Short")->comment("Country's short English name from UN Protocol and Liaison Service");
            $table->text("ISO4217-currency_alphabetic_code")->comment("ISO 4217 currency alphabetic code");
            $table->text("Small Island Developing States SIDS")->comment("Country classification from United Nations Statistics Division");
            $table->text("UNTERM Spanish Short")->comment("Country's short Spanish name from UN Protocol and Liaison Service");
            $table->text("ISO4217-currency_numeric_code")->comment("ISO 4217 currency numeric code");
            $table->text("UNTERM Chinese Formal")->comment("Country's formal Chinese name from UN Protocol and Liaison Service");
            $table->text("UNTERM French Formal")->comment("Country's formal French name from UN Protocol and Liaison Service");
            $table->text("UNTERM Russian Short")->comment("Country's short Russian name from UN Protocol and Liaison Service");
            $table->text("M49")->comment("UN Statistics M49 numeric codes (nearly synonymous with ISO 3166-1 numeric codes, which are based on UN M49. ISO 3166-1 does not include Channel Islands or Sark, for example)");
            $table->text("Sub-region Code")->comment("Country classification from United Nations Statistics Division");
            $table->text("Region Code")->comment("Country classification from United Nations Statistics Division");
            $table->text("official_name_ar")->comment("Country or Area official Arabic short name from UN Statistics Divsion");
            $table->text("ISO4217-currency_minor_unit")->comment("ISO 4217 currency number of minor units");
            $table->text("UNTERM Arabic Formal")->comment("Country's formal Arabic name from UN Protocol and Liaison Service");
            $table->text("UNTERM Chinese Short")->comment("Country's short Chinese name from UN Protocol and Liaison Service");
            $table->text("Land Locked Developing Countries LLDC")->comment("Country classification from United Nations Statistics Division");
            $table->text("Intermediate Region Name")->comment("Country classification from United Nations Statistics Division");
            $table->text("official_name_es")->comment("Country or Area official Spanish short name from UN Statistics Divsion");
            $table->text("UNTERM English Formal")->comment("Country's formal English name from UN Protocol and Liaison Service");
            $table->text("official_name_cn")->comment("Country or Area official Chinese short name from UN Statistics Divsion");
            $table->text("official_name_en")->comment("Country or Area official English short name from UN Statistics Divsion");
            $table->text("ISO4217-currency_country_name")->comment("ISO 4217 country name");
            $table->text("Least Developed Countries LDC")->comment("Country classification from United Nations Statistics Division");
            $table->text("Region Name")->comment("Country classification from United Nations Statistics Division");
            $table->text("UNTERM Arabic Short")->comment("Country's short Arabic name from UN Protocol and Liaison Service");
            $table->text("Sub-region Name")->comment("Country classification from United Nations Statistics Division");
            $table->text("official_name_ru")->comment("Country or Area official Russian short name from UN Statistics Divsion");
            $table->text("Global Name")->comment("Country classification from United Nations Statistics Division");
            $table->text("Capital")->comment("Capital city from Geonames");
            $table->text("Continent")->comment("Continent from Geonames");
            $table->text("TLD")->comment("Top level domain from Geonames");
            $table->text("Languages")->comment("Languages from Geonames");
            $table->text("Geoname ID")->comment("Geoname ID");
            $table->text("CLDR display name")->comment("Country's customary English short name (CLDR)");
            $table->text("EDGAR")->comment("EDGAR country code from SEC");
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
        Schema::dropIfExists('adv_countries');
    }
}
