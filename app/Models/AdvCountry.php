<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdvCountry extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'FIFA',
        'Dial',
        'ISO3166-1-Alpha-3',
        'MARC',
        'is_independent',
        'ISO3166-1-numeric',
        'GAUL',
        'FIPS',
        'WMO',
        'ISO3166-1-Alpha-2',
        'ITU',
        'IOC',
        'DS',
        'UNTERM Spanish Formal',
        'Global Code',
        'Intermediate Region Code',
        'official_name_fr',
        'UNTERM French Short',
        'ISO4217-currency_name',
        'Developed-Developing Countries',
        'UNTERM Russian Formal',
        'UNTERM English Short',
        'ISO4217-currency_alphabetic_code',
        'Small Island Developing States SIDS',
        'UNTERM Spanish Short',
        'ISO4217-currency_numeric_code',
        'UNTERM Chinese Formal',
        'UNTERM French Formal',
        'UNTERM Russian Short',
        'M49',
        'Sub-region Code',
        'Region Code',
        'official_name_ar',
        'ISO4217-currency_minor_unit',
        'UNTERM Arabic Formal',
        'UNTERM Chinese Short',
        'Land Locked Developing Countries LLDC',
        'Intermediate Region Name',
        'official_name_es',
        'UNTERM English Formal',
        'official_name_cn',
        'official_name_en',
        'ISO4217-currency_country_name',
        'Least Developed Countries LDC',
        'Region Name',
        'UNTERM Arabic Short',
        'Sub-region Name',
        'official_name_ru',
        'Global Name',
        'Capital',
        'Continent',
        'TLD',
        'Languages',
        'Geoname ID',
        'CLDR display name',
        'EDGAR',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];
}
