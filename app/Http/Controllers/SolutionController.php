<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $solutions = Solution::all();
        return view('solution.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solution = New Solution();
        $problems = Problem::all()->pluck('name_problem', 'id');
        return view('solution.create', ["solution" => $solution, "problems" => $problems ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_solution' => 'required',
            'problem_id' => 'required'
        ]);

        $solution = new Solution();
        $solution->name_solution = $request->name_solution;
        $solution->problem_id = $request->problem_id;


        if ($solution->save()) {
            return redirect(url('/solutions'));
        } else {
            return view('solution.create', ["solution" => $solution]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solution = Solution::find($id);
        $problems = Problem::all()->pluck('name_problem', 'id');
        return view('solution.edit', ["solution" => $solution, "problems" => $problems  ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_solution' => 'required',
            'problem_id' => 'required'
        ]);

        $solution =  Solution::find($id);
        $solution->name_solution = $request->name_solution;
        $solution->problem_id = $request->problem_id;


        if ($solution->save()) {
            return redirect(url('/solutions'));
        } else {
            return view('solution.edit', ["solution" => $solution]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solution::destroy($id);
        return redirect(url('/solutions'));
    }

}
