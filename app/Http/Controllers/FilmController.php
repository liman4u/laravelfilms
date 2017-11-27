<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();

        return response()->json($films);
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
        $film = new Film([
            'name' => $request->get('name'),
            'ticket_price' => $request->get('ticket_price'),
            'description' => $request->get('description'),
            'release_date' => $request->get('release_date'),
            'rating' => $request->get('rating'),
            'genre' => $request->get('genre'),
            'country' => $request->get('country'),
            'photo' => $request->get('photo')
        ]);
        $film->save();
        return response()->json('Successfully added');
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
        $film = Film::find($id);
        return response()->json($film);
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
        $film = Film::find($id);
        $film->ticket_price = $request->get('ticket_price');
        $film->description = $request->get('description');
        $film->release_date = $request->get('release_date');
        $film->rating = $request->get('rating');
        $film->genre = $request->get('genre');
        $film->country = $request->get('country');
        $film->photo = $request->get('photo');
        $film->save();
        return response()->json('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();
        return response()->json('Successfully Deleted');
    }
}
