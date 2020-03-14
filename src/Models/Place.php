<?php

namespace TopDigital\Places\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;

class Place extends Model
{
    use SoftDeletes, PostgisTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'location', 'description', 'phones', 'timetable',
    ];

    protected $hidden = [
        'location', 'description', 'phones', 'timetable',
    ];

    protected $casts = [
        'location' => PointCast::class,
        'phones' => 'array',
        'timetable' => 'array',
    ];

    protected $postgisFields = [
        'location',
    ];

    protected $postgisTypes = [
        'location' => [
            'geomtype' => 'geography',
            'srid' => 4326
        ],
    ];
}
