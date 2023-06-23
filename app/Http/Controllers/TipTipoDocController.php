<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipTipoDoc;

class TipTipoDocController extends Controller
{
    public function index()
    {
        $tiposDocs = TipTipoDoc::all();
        return response()->json([
            'success' => true,
            'status' => 200,
            'data' => $tiposDocs
        ]);
    }

    public function show($id)
    {
        $tipoDoc = TipTipoDoc::findOrFail($id);
        return response()->json([
            'success' => true,
            'status' => 200,
            'data' => $tipoDoc
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tip_nombre' => 'required|string',
            'tip_prefijo' => 'required|string',
        ]);

        $tipoDoc = TipTipoDoc::create($validatedData);

        return response()->json([
            'success' => true,
            'status' => 201,
            'message' => 'Tipo Documento creado correctamente'

        ]);
    }

    public function update(Request $request, $id)
    {
        $tipoDoc = TipTipoDoc::find($id);

        if (!$tipoDoc) {
            return response()->json(['message' => 'TipTipoDoc not found'], 404);
        }

        $validatedData = $request->validate([
            'tip_nombre' => 'string',
            'tip_prefijo' => 'string',
        ]);

        $tipoDoc->update($validatedData);

        return response()->json([
            'success' => true,
            'status' => 201,
            'message' => 'Tipo documento actualizado correctamente'
        ]);
        
    }

    public function destroy($id)
    {
        $tipoDoc = TipTipoDoc::find($id);

        if (!$tipoDoc) {
            return response()->json(['message' => 'TipTipoDoc not found'], 404);
        }

        $tipoDoc->delete();

        return response()->json(['message' => 'TipTipoDoc deleted']); 
    }
}
