<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Problem;
use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PollsController extends Controller
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
        $polls = Poll::all();
        return view('polls.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $poll = new Poll();
        $problems = Problem::all();
        $solutions = Solution::all();
        $mobilities = DB::table('mobilities')->pluck('name_mobility');

        return view('polls.create', ["poll" => $poll, "problems" => $problems, "solutions" => $solutions, "mobilities" => $mobilities]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request, [
            'name_person' => 'required',
            'document' => 'required',
            'district' => 'required',
            'cell_phone' => 'required',
            'problem_id' => 'required',
            'solution_id' => 'required',
            'mobility_id' => 'required'
        ]);

        $poll = new Poll();
        $poll->name_person = $request->name_person;
        $poll->document = $request->document;
        $poll->district = $request->district;
        $poll->cell_phone = $request->cell_phone;
        $poll->problem_id = $request->problem_id;
        $poll->solution_id = $request->solution_id;
        $poll->mobility_id = $request->mobility_id;
        $poll->user_id = $id;
        $poll->state = '2';

        if ($poll->save()) {
            return redirect(url('/polls'));
        } else {
            return view('polls.create', ["poll" => $poll]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
