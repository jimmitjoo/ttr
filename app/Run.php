<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Run extends Model
{

    protected $table = 'runs';

    protected $fillable = [
        'organizer_id',
        'name',
        'town',
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

    public function __construct()
    {
        Date::setLocale('sv');
    }

    public function organizer()
    {
        return $this->belongsTo('App\Organizer');
    }

    public function getStartDatetimeAttribute($value)
    {
        return ucwords(Date::parse($this->attributes['start_datetime'])->format('D j M'));
    }

}