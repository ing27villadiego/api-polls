<?php

namespace App\Http\Controllers;

use App\Mobility;
use App\Poll;
use App\Problem;
use App\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = Poll::where('user_id', $id)->get()->toArray();

        $poll = New Poll();
        $problems = Problem::all();
        $solutions = Solution::all();
        $mobilities = Mobility::all()->pluck('name_mobility', 'id');



        return view('home', [ "problems" => $problems, "solutions" => $solutions, "mobilities" => $mobilities, "user" => $user, "poll" => $poll]);

    }

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
            return redirect(url('/home'));
        } else {
            return view('home', ["poll" => $poll]);
        }
    }


}
