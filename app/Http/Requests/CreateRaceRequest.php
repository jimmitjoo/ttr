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
            'date' => 'required|date',
            'town' => 'required',
            'run_name' => 'required',
            'run_distance' => 'required|integer',
            'run_entry_fee' => 'required|integer',
            'run_late_entry_fee' => 'required|integer',
            'run_first_entry_datetime' => 'required|date',
            'run_first_late_entry_datetime' => 'required',
            'run_last_late_entry_datetime' => 'required',
            'run_start_datetime' => 'required',
		];
	}

}
