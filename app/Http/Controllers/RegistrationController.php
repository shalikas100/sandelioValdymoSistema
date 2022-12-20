<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();

        return view('registracija.index',['registrations' => $registrations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registracija.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'im_kodas' => 'required',
            'klientas' => 'required',
            'prisijungimo_vardas' => 'required|unique:registrations',
            'adresas' => 'required',
            'miestas' => 'required',
            'pasto_kodas' => 'required',
            'telefonas' => 'required',
            'el_pastas' => 'required|email|unique:registrations',
            'slaptazodis' => 'required',
            'pakartoti_slaptazodi' => 'required'
        ]);

        $registration = new Registration();

        $registration->im_kodas = $request->im_kodas;
        $registration->klientas = $request->klientas;
        $registration->prisijungimo_vardas = $request->prisijungimo_vardas;
        $registration->adresas = $request->adresas;
        $registration->miestas = $request->miestas;
        $registration->pasto_kodas = $request->pasto_kodas;
        $registration->telefonas = $request->telefonas;
        $registration->el_pastas = $request->el_pastas;
        $registration->slaptazodis = $request->slaptazodis;
        $registration->pakartoti_slaptazodi = $request->pakartoti_slaptazodi;

        $res = $registration->save();

        if($res){
            return back() -> with('success', 'Prisiregistruota sekmingai!');
        } 
        else{
            return back() -> with('fail', 'Nepavyko');
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
