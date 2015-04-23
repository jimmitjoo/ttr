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

    /**
     * @param $query
     * @param $town
     * @return mixed
     */
    public static function scopeTown($query, $town)
    {
        return $query->where('town', '=', $town);
    }

    /**
     * @param $query
     * @return mixed
     */
    public static function scopeDateAscending($query)
    {
        return $query->orderBy('date', 'ASC');
    }

    /**
     * @param $query
     * @return mixed
     */
    public static function scopeDateDescending($query)
    {
        return $query->orderBy('date', 'DESC');
    }

}