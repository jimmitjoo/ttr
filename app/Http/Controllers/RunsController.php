<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Run;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RunsController extends Controller {

    public function apiGetList(Request $request, $query = null)
    {
        $json = Run::getList($query)->get();
        return response()->json($json)->setCallback($request->input('callback'));
    }

    public function apiGetPaginated(Request $request, $query = null)
    {
        $json = Run::getList($query)->paginate(15);
        return response()->json($json)->setCallback($request->input('callback'));
    }

    public function apiGetById(Request $request, $id)
    {
        $json = Run::where('id', '=', $id)->with('organizer')->first();
        return response()->json($json)->setCallback($request->input('callback'));
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
