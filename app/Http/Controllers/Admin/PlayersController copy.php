<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('admin.players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'born' => ['required'],
            'birthplace' => ['required'],
            'batting_style' => ['required'],
            'bowling_style' => ['required'],
            'icc_ranking_batting' => ['required'],
            'icc_ranking_bowling' => ['required'],
            'total_match' => ['required'],
            'innings' => ['required'], 
            'total_runs' => ['required'],
            'career_best_bowling' => ['required'],
            '_50s' => ['required'],
            '_100s' => ['required'], 
            'career_best_batting' => ['required'],
            'wickets' => ['required'],
            '_5_wickets' => ['required'],
            'economy' => ['required'],
            'career_best_bowling' => ['required'],
            'photo' => ['required'],
            'career' => ['required'],
            'team_id' => ['required'],
            
        ]);

        if (Player::create($request->all())) {
            return redirect(route('admin.players.index'))->with(['success' => 'Player added successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
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
        $players = Player::all();
        return view('admin.players.show', compact('players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $players = Player::find($id);
        return view('admin.players.edit', compact('players'));
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
        $players = player::find($id);
        $players->name = $request->name;
        $players->born = $request->born;
        $players->birthplace = $request->birthplace;
        $players->batting_style = $request->batting_style;
        $players->bowling_style = $request->bowling_style;
        $players->icc_ranking_batting = $request->icc_ranking_batting;
        $players->icc_ranking_bowling = $request->icc_ranking_bowling;
        $players->total_match = $request->total_match;
        $players->innings = $request->innings;
        $players->total_runs = $request->total_runs;
        $players->batting_average = $request->batting_average;
        $players->_50s = $request->_50s;
        $players->_100s = $request->_100s;
        $players->career_best_batting = $request->career_best_batting;
        $players->wickets = $request->wickets;
        $players->_5_wickets = $request->_5_wickets;
        $players->economy = $request->economy;
        $players->career_best_bowling = $request->career_best_bowling;
        $players->photo = $request->photo;
        $players->career = $request->career;
        $players->team_id = $request->team_id;
       
        if ($players->save()) {
            return redirect(route('admin.players.edit', $players->id))->with(['success' => 'Updated successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
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
        $players = Player::find($id);
        if ($players->delete()) {
            return redirect(route('admin.players.index', $players->id))->with(['success' => 'Deleted successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
        }
    }
}