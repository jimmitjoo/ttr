<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class Run extends Model
{

    protected $table = 'runs';

    protected $fillable = [
        'organizer_id',
        'name',
        'description',
        'town',
        'distance',
        'fortime',
        'tempo',
        'entry_fee',
        'late_entry_fee',
        'first_entry_datetime',
        'first_late_entry_datetime',
        'last_late_entry_datetime',
        'start_datetime',
        'cover_src',
        'external_link',
        'signup_link',
        'map_id',
        'type'
    ];

    protected $appends = [
        'slug'
    ];

    public function __construct()
    {
        Date::setLocale('sv');
    }

    public function organizer()
    {
        return $this->belongsTo('App\Organizer');
    }

    public function admins()
    {
        return $this->hasMany('App\RunAdministrators');
    }


    public function getStartDatetimeAttribute()
    {
        return ucwords(Date::parse($this->attributes['start_datetime'])->format('D j M'));
    }

    public function getTempoAttribute()
    {
        if ($this->attributes['tempo'] == '00:00:00') return Lang::get('race.unknown_pace');

        return substr($this->attributes['tempo'], 3);
    }

    public function getSlugAttribute()
    {
        if (isset($this->attributes['name']) && strpos($this->attributes['name'], $this->attributes['town']) !== false) {
            $string = $this->attributes['name'];
        } elseif (isset($this->attributes['name'])) {
            $string = $this->attributes['name'] . ' ' . $this->attributes['town'];
        } else {
            $string = 'name';
        }

        $slug = Str::slug($string, '-') . '/' . $this->attributes['id'];

        return '/lopp/' . $slug;
    }

    public static function getList($query)
    {
        if (strlen($query) > 0) {
            $runs = self::where('name', 'LIKE', '%' . $query . '%')
                ->where('start_datetime', '>=', date('Y-m-d'))

                ->orWhere('town', 'LIKE', '%' . $query . '%')
                ->where('start_datetime', '>=', date('Y-m-d'));
        } else {
            $runs = self::where('start_datetime', '>=', date('Y-m-d'));
        }

        return $runs;
    }

    public static function getLink($id)
    {
        $run = self::find($id);
        return getenv('APP_URL') . $run->slug;
    }

    public static function printRunLink($id, $linktext = null, $class = '')
    {
        if ($linktext == null || $linktext == '') {
            $run = self::find($id);
            $linktext = $run->name;
        }

        return '<a class="' . $class .'" href="http://' . self::getLink($id) . '">' . $linktext . '</a>';

    }

    public static function createTraining($params)
    {
        $training = new Run;
        $training->name = $params['name'];
        $training->town = $params['town'];
        $training->distance = $params['distance'];
        $training->tempo = $params['tempo'];
        $training->fortime = $params['fortime'];
        $training->description = $params['description'];
        //$training->entry_fee = $params['entry_fee'];
        $training->start_datetime = $params['start_datetime'];
        $training->type = 'training';
        $training->save();

        self::setAdmin($training->id, $params['user_id']);

        return $training;
    }

    public static function setAdmin($run_id, $user_id)
    {
        $admin = new RunAdministrators;
        $admin->user_id = $user_id;
        $admin->run_id = $run_id;
        $admin->save();

        return $admin;
    }

}