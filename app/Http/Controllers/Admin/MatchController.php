<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::all();
        return view('admin.matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matches.create');
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
            'team_1' => ['required'],
            'team_2' => ['required'],
            'schedule' => ['required'],
            'description' => ['required'],
            'result' => ['required'],
            'venue' => ['required'],
        ]);

        if (Match::create($request->all())) {
            return redirect(route('admin.matches.index'))->with(['success' => 'Match added successfully']);
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
        $matches = Match::find($id);
        return view('admin.matches.edit', compact('match'));
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
         $matches = Match::find($id);
         $matches->name = $request->name;
         $matches->point = $request->point;
         $matches->latest_squad = $request->latest_squad;
        if ( $matches->save()) {
            return redirect(route('admin.matches.edit',  $matches->id))->with(['success' => 'Updated successfully']);
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
         $matches = Match::find($id);
        if ( $matches->delete()) {
            return redirect(route('admin.matches.index',  $matches->id))->with(['success' => 'Deleted successfully']);
        } else {
            return back()->with(['error' => 'Something went wrong!!! Please try again']);
        }
    }
}