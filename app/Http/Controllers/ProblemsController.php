<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Solution;
use Illuminate\Http\Request;

class ProblemsController extends Controller
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
        $problems = Problem::all();
        return view('problem.index', compact('problems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $problem = New Problem();
        return view('problem.create', ["problem" => $problem]);
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
            'name_problem' => 'required'
        ]);

        $problem = new Problem;
        $problem->name_problem = $request->name_problem;

        if ($problem->save()) {
            return redirect(url('/problems'));
        } else {
            return view('problem.create', ["problem" => $problem]);
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
        $problem = Problem::find($id);
        $solutions = Solution::all()->where('problem_id', $id);

        return view('problem.show', ["problem" => $problem, "solutions" => $solutions  ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problem = Problem::find($id);
        return view('problem.edit', ["problem" => $problem]);
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
            'name_problem' => 'required'
        ]);

        $problem =  Problem::find($id);
        $problem->name_problem = $request->name_problem;

        if ($problem->save()) {
            return redirect(url('/problems'));
        } else {
            return view('problems.edit', ["problem" => $problem]);
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
        Problem::destroy($id);
        return redirect(url('/problems'));
    }
}
