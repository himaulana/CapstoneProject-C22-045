<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use App\Models\User;
use App\Models\Plant;
use Illuminate\Http\Request;

class GardenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with("gardens")->where("id", "=", auth()->user()->id)->get();
        $plant_id_user = Garden::where("user_id", "=", auth()->user()->id)->pluck('plant_id')->all();
        $plants = Plant::whereNotIn('id', $plant_id_user)->get();

        return view('profile', ['user' => $user, 'plants' => $plants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $garden = new Garden;
        $garden->plant_id = request()->plant_id;
        $garden->user_id = request()->user()->id;
        $garden->save();

        return redirect('/mygarden');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
