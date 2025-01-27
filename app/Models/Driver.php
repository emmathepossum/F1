<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'driverId' => null,
        'url' => null,
        'givenName' => null,
        'familyName' => null,
        'dateOfBirth' => null,
        'nationality' => null,
        'permanentNumber' => null,
        'code' => null,
    ];
}
