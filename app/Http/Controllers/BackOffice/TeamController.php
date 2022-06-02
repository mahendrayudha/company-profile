<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['team'] = Team::all();
        return view('backoffice.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'mimes:jpg,jpeg,png|max:2048'
            ],
        );
        $filename = "";
        $key =  Str::random(10);
        if ($request->image <> "") {
            $file = $request->image;
            $filename = 'assets/product' . '/' . $key . '.' . $file->extension();
            $file->move(public_path('assets/product'), $filename);
        }
        $data = [
            'name' => $request->name,
            'github' => $request->github,
            'facebook' => $request->facebook,
            'gmail' => $request->gmail,
            'instagram' => $request->instagram,
            'image' =>  $filename,
        ];
        Team::create($data);
        return redirect()->route('team.index')->with('success', 'Success Create Data');
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
    public function edit(Team $team)
    {
        $data['team'] = $team;
        return view('backoffice.team.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate(
            [
                'image' => 'mimes:jpg,jpeg,png|max:2048'
            ],
        );
        $filename = $team->image;
        $key =  Str::random(10);
        if ($request->image <> "") {
            $file = $request->image;
            $filename = 'assets/product' . '/' . $key . '.' . $file->extension();
            $file->move(public_path('assets/product'), $filename);
        }
        $data = [
            'name' => $request->name,
            'github' => $request->github,
            'facebook' => $request->facebook,
            'gmail' => $request->gmail,
            'instagram' => $request->instagram,
            'image' =>  $filename,
        ];
        Team::where('id', $team->id)
            ->update(
                $data
            );
        return redirect()->route('team.index')->with('success', 'Success Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Success Delete Data');
    }
}
