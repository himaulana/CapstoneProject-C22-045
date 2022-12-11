<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Article;
use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plants = Plant::where('id', '!=', $request->id)->get()->random(6);
        $article = Article::get()->random(6);
        $keyword = $request->search;
        $search = Plant::where('name', 'like', "%" . $keyword . "%")->paginate(6);
        return view('explore', compact('search', 'plants', 'article'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function plant__detail(Request $request)
    {
        $plants = Plant::where('id', '!=', $request->id)->paginate(6);
        $article = Article::get()->random(1);
        $plant = Plant::find($request->id);
        return view('detail.plant', compact('plants', 'plant', 'article'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function article__detail(Request $request)
    {
        $articles = Article::where('id', '!=', $request->id)->paginate(6);
        $plant = Plant::get()->random(1);
        $article_detail = Article::findOrFail($request->id);
        // dd($articles);
        return view('detail.article', compact('articles', 'plant', 'article_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function show(Explore $explore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function edit(Explore $explore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Explore $explore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Explore  $explore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Explore $explore)
    {
        //
    }
}
