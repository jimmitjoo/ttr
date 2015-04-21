<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model {

    protected $table = 'races';

    protected $fillable = [
        'name',
        'logo_src',
        'cover_src',
        'date',
        'country',
        'county',
        'town',
        'description',
        'external_link',
        'signup_link'
    ];

}