<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Operation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Operation::create($request->all())) {
            return response()->json([
                'success' => 'Operation effectuer avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Operation $operation)
    {
        $array = [
            'operation' => $operation,
            'client' => $operation->Client,
            'compte' => $operation->Compte,
            'type' => $operation->Type
        ];
        return $operation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operation $operation)
    {
        if($operation->update($request->all())) {
            $operation->save();
            return response()->json([
                'success' => 'Operation modifier avec success'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operation $operation)
    {   
        $operation->delete();
    }
}
