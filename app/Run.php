<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model {

	protected $table = 'runs';

    protected $fillable = [
        'race_id',
        'name',
        'distance',
        'entry_fee',
        'late_entry_fee',
        'first_entry_datetime',
        'first_late_entry_datetime',
        'last_late_entry_datetime',
        'start_datetime',
        'cover_src',
        'external_link',
        'signup_link',
        'map_id'
    ];

    public function organizer()
    {
        return $this->belongsTo('App\Organizer', 'race_id');
    }

}