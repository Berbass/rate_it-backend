<?php

namespace App\Http\Controllers;

use App\Thing;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    /**
     * Gets the list of things.
     *
     * @return     \App\Thing[]
     */
    public function list()
    {
    	return Thing::all();
    }

    /**
     * Creates a new thing.
     *
     * @param      \Illuminate\Http\Request  $req  The request
     *
     * @return     \App\Thing	The created thing
     */
    public function new(Request $req)
    {
    	return Thing::create($req->all());
    }

    /**
     * Updated the given thing
     *
     * @param      \App\Thing            $thing  The thing
     * @param      \Illuminate\Http\Request  $req    The request
     *
     * @return     \App\Thing
     */
    public function edit(RateScale $thing, Request $req)
    {
		abort_if(
			! $thing->update($req->all()),
			500, "Could not update thing with id $thing->id"
		);

    	return $thing;
    }

    /**
     * Gets the specified thing.
     *
     * @param      \App\Thing  $thing  The thing
     *
     * @return     \App\Thing
     */
    public function get(Thing $thing)
    {
    	return $thing;
    }

    /**
     * Deletes the given thing.
     *
     * @param      \App\Thing  $thing  The thing
     */
    public function delete(Thing $thing)
    {
    	$thing->delete();
    }
}
