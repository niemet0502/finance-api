<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compte;
class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Compte::all();
    }


    public function getOperationByCompte($id){
        return Compte::find($id)->Operations;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Compte::create($request->all())) {
            return response()->json([
                'success' => 'Compte créée avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Compte $compte)
    {
        return $compte;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compte $compte)
    {
        if($compte->update($request->all())) {
            $compte->save();
            return response()->json([
                'success' => 'Compte modifier avec success'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compte $compte)
    {
        $compte->delete();
    }
}
