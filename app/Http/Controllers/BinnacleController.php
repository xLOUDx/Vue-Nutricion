<?php

namespace App\Http\Controllers;

use App\Http\Requests\BinnacleRequest;
use App\Binnacle;
use Illuminate\Http\Request;

class BinnacleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getData(Request $request){
      return Binnacle::where('patient_id', $request->iden)->get();
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
    public function store(BinnacleRequest $request)
    {
        $binnacle = new Binnacle;

        $binnacle->patient_id = $request->patient_id;
        $binnacle->weight = $request->weight;
        $binnacle->imc  = $request->imc;
        $binnacle->anxiety = $request->anxiety;
        $binnacle->exercise  = $request->exercise;
        $binnacle->digestion  = $request->digestion;
        $binnacle->liquids  = $request->liquids;
        $binnacle->size_t2  = $request->size_t2;
        $binnacle->desired_weight  = $request->desired_weight;
        $binnacle->mg_normal  = $request->mg_normal;
        $binnacle->kg_km  = $request->kg_km;
        $binnacle->projection_treatment  = $request->projection_treatment;
        $binnacle->se  = $request->se;
        $binnacle->tri  = $request->tri;
        $binnacle->bi  = $request->bi;
        $binnacle->si  = $request->si;
        $binnacle->total  = $request->total;
        $binnacle->mg  = $request->mg;
        $binnacle->waist  = $request->waist;
        $binnacle->hip  = $request->hip;
        $binnacle->thigh  = $request->thigh;
        $binnacle->braq  = $request->braq;
        $binnacle->wrist = $request->wrist;

        $binnacle->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function show(Binnacle $binnacle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function edit(Binnacle $binnacle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Binnacle $binnacle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Binnacle  $binnacle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Binnacle $binnacle)
    {
        //
    }
}
