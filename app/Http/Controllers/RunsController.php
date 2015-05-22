<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Run;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CreateNewWorkoutRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class RunsController
 * @package App\Http\Controllers
 */
class RunsController extends Controller {

    /**
     * @param Request $request
     * @param null $query
     * @return mixed
     */
    public function apiGetList(Request $request, $query = null)
    {
        $json = Run::getList($query)->orderBy('start_datetime')->get();
        return response()->json($json)->setCallback($request->input('callback'));
    }

    /**
     * @param Request $request
     * @param null $query
     * @return mixed
     */
    public function apiGetPaginated(Request $request, $query = null)
    {
        $json = Run::getList($query)->orderBy('start_datetime')->paginate(15);
        return response()->json($json)->setCallback($request->input('callback'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
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
		return view('run.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateNewWorkoutRequest $request
     * @return Response
     */
	public function store(CreateNewWorkoutRequest $request)
	{

        $runParams = $request->all();
        $runParams['tempo'] = '00:' . $request->get('tempo');
        $runParams['user_id'] = Auth::user()->id;

        $run = Run::createTraining($runParams);

        return $run;

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($runname, $id)
	{
		$run = Run::where('id', '=', $id)->first();

        if ($lastSpacePosition = strrpos($run->name, ' ') ) {
            $run->purename = substr($run->name, 0, $lastSpacePosition);
            if (strpos($run->purename, 'km') === false) $run->purename = $run->name;
        } else {
            $run->purename = $run->name;
        }


        if (strpos($run->purename, $run->town) !== false) {
            $run->title = $run->purename;
        } else {
            $run->title = $run->purename . ', ' . $run->town;
        }

        $races = Run::where('town', '=', $run->town)->paginate();

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
