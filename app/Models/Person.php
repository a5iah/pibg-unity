<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'forename',
        'surname',
        'title',
        'ic_no',
        'ic_type',
        'phone',
        'fax',
        'email',
        'address1',
        'address2',
        'address3',
        'city',
        'postcode',
        'state',
        'country',
    ];
}
