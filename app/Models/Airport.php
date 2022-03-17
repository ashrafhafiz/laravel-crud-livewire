<?php

namespace App\Models;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static create(array $array)
 */
class Airport extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use SpatialTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ident',
        'type',
        'name',
        'elevation_ft',
        'continent',
        'iso_country',
        'iso_region',
        'municipality',
        'gps_code',
        'iata_code',
        'local_code',
    ];

    /**
     * The spatial attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $spatialFields = [
        'coordinates',
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
