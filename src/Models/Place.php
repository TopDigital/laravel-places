<?php

namespace TopDigital\Places\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'location', 'description', 'phones', 'timetable',
    ];

    protected $hidden = [
        'description', 'phones', 'timetable',
    ];

    protected $casts = [
        'location' => PointCast::class,
        'phones' => 'array',
        'timetable' => 'array',
    ];
}
