<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Patients;
use Illuminate\Http\Request;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }

    public function getData(Request $request){

      if($request->iden == TRUE){
        return Patients::where('id', $request->iden)->get();
      }
      else {
        return Patients::orderBy('name', 'DESC')->get();
      }

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
    public function store(PatientRequest $request)
    {
      $patient = new Patients;

      $patient->reference = $request->reference;
      $patient->name = $request->name;
      $patient->last_name_pat = $request->last_name_pat;
      $patient->last_name_mat = $request->last_name_mat;
      $patient->email = $request->email;
      $patient->run = $request->run;
      $patient->prevision = $request->prevision;
      $patient->address = $request->address;
      $patient->job = $request->job;
      $patient->phone = $request->phone;
      $patient->age = $request->age;
      $patient->size = $request->size;
      $patient->acept_size = $request->acept_size;
      $patient->t2 = $request->t2;
      $patient->imc_25 = $request->imc_25;
      $patient->sra = $request->sra;

      $patient->save();

      return $patient;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patients $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patients)
    {
        //
    }
}
