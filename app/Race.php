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
        'country',
        'county',
        'town',
        'description'
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

    public function administrator()
    {

    }

}