<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRaceRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
            'run_town' => 'required',
            'run_name' => 'required',
            'run_distance' => 'required|integer',
            'run_entry_fee' => 'integer',
            'run_late_entry_fee' => 'integer',
            'run_first_entry_datetime' => 'date',
            'run_start_datetime' => 'required',
		];
	}

}
