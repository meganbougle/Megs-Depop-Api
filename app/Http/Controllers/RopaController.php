<?php

namespace App\Http\Controllers;

use App\Models\Ropa;
use Illuminate\Http\Request;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ropas= Ropa::select('codigoBarra as Codigo','nombre as Nombre','marca as Marca','talla as Talla','color as Color','precio as Precio')->orderBy('nombre')->get();
        return response()->json(['status'=>'success','data'=>$ropas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
            $ropa = Ropa::create($request->all());
            return response()->json(['status'=>'success', 'message'=>'Ropa creada exitosamente', 'data'=>$ropa]);

        }
        catch(\Exception $e){
            return response()->json(['status'=>'error', 'message'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try{
            $ropa = Ropa::findOrFail($id);
            return response()->json(['status'=>'success', 'data'=>$ropa]);
            
        }
        catch(\Exception $e){
            return response()->json(['status'=>'error', 'message'=>$e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
