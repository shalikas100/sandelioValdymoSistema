<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('klientai.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klientai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();

        $client->im_kodas = $request->im_kodas;
        $client->klientas = $request->klientas;
        $client->adresas = $request->adresas;
        $client->miestas = $request->miestas;
        $client->pasto_kodas = $request->pasto_kodas;
        $client->telefonas = $request->telefonas;
        $client->el_pastas = $request->el_pastas;

        $client->save();

        return redirect()->route('klientai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('klientai.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('klientai.edit',['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->im_kodas = $request->im_kodas;
        $client->klientas = $request->klientas;
        $client->adresas = $request->adresas;
        $client->miestas = $request->miestas;
        $client->pasto_kodas = $request->pasto_kodas;
        $client->telefonas = $request->telefonas;
        $client->el_pastas = $request->el_pastas;


        $client->save();

        return redirect()->route('klientai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('klientai.index');
    }
}
