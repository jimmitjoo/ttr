<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Race
 * @package App
 */
class Race extends Model
{

    /**
     * @var string
     */
    protected $table = 'races';

    /**
     * @var array
     */
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