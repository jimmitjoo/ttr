<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RaceAdministrators extends Model {

	protected $table = 'race_administrators';

    protected $fillable = [
        'race_id',
        'user_id'
    ];

    public function organizers()
    {
        return $this->hasMany('App\Organizer', 'id', 'race_id');
    }

    public function administrator()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

}
