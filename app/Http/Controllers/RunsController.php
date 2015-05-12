<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Run;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RunsController extends Controller {

    public function apiGetList($query = null)
    {

        if (strlen($query) > 0) {
            $runs = Run::where('name', 'LIKE', '%' . $query . '%')
                ->where('start_datetime', '>=', date('Y-m-d'))

                ->orWhere('town', 'LIKE', '%' . $query . '%')
                ->where('start_datetime', '>=', date('Y-m-d'))

                ->get();
        } else {
            $runs = Run::where('start_datetime', '>=', date('Y-m-d'))->get();
        }

        return $runs;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($runname, $id)
	{
		$run = Run::where('id', '=', $id)->with('organizer')->first();

        $lastSpacePosition = strrpos($run->name, ' ');
        $run->purename = substr($run->name, 0, $lastSpacePosition);

        if (strpos($run->purename, $run->town) !== false) {
            $run->title = $run->purename;
        } else {
            $run->title = $run->purename . ', ' . $run->town;
        }

        $races = Run::where('town', '=', $run->town)->with('organizer')->paginate();

        return view('run.show')->with('run', $run)->with('races', $races);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
