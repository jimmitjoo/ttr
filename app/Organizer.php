<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Organizer
 * @package App
 */
class Organizer extends Model
{

    /**
     * @var string
     */
    protected $table = 'organizers';

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

    public function runs()
    {
        return $this->hasMany('App\Run', 'race_id');
    }

    public function administrator()
    {

    }

}