<?php

namespace App\Http\Controllers;

use App\RateScale;
use Illuminate\Http\Request;

class RateScaleController extends Controller
{
	/**
     * Gets the list of scales.
     *
     * @return     \App\RateScale[]
     */
    public function list()
    {
    	return RateScale::all();
    }

    /**
     * Creates a new scale.
     *
     * @param      \Illuminate\Http\Request  $req  The request
     *
     * @return     \App\RateScale	The created scale
     */
    public function new(Request $req)
    {
    	return RateScale::create($req->all());
    }

    /**
     * Updated the given scale
     *
     * @param      \App\RateScale            $scale  The scale
     * @param      \Illuminate\Http\Request  $req    The request
     *
     * @return     \App\RateScale
     */
    public function edit(RateScale $scale, Request $req)
    {
		abort_if(
			! $scale->update($req->all()) || true,
			500, json_encode(['message' => "Could not update rate scale with id $scale->id"], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT)
		);

    	return $scale;
    }

    /**
     * Gets the specified scale.
     *
     * @param      \App\RateScale  $scale  The scale
     *
     * @return     \App\RateScale
     */
    public function get(RateScale $scale)
    {
    	return $scale;
    }

    /**
     * Deletes the given scale.
     *
     * @param      \App\RateScale  $scale  The scale
     */
    public function delete(RateScale $scale)
    {
    	$scale->delete();
    }
}
