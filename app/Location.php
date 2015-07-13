<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	protected $table = 'locations';

    protected $fillable = [
        'name',
        'longitude',
        'latitude'
    ];

    public function getByName($name)
    {
        return self::where('name', '=>', $name)->first();
    }

}
