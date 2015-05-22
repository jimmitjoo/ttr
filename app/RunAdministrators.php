<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RunAdministrators extends Model {

	protected $table = 'run_administrators';

    protected $fillable = [
        'run_id',
        'user_id'
    ];

    public function runs()
    {
        return $this->hasMany('App\Run');
    }

    public function administrator()
    {
        return $this->belongsTo('App\User');
    }

}
