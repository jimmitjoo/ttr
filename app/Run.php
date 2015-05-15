<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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

    public function getStartDatetimeAttribute()
    {
        return ucwords(Date::parse($this->attributes['start_datetime'])->format('D j M'));
    }

    public function getSlugAttribute()
    {
        if (strpos($this->attributes['name'], $this->attributes['town']) !== false) {
            $string = $this->attributes['name'];
        } else {
            $string = $this->attributes['name'] . ' ' . $this->attributes['town'];
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

}