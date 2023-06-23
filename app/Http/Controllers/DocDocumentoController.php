<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DocDocumento;

class DocDocumentoController extends Controller
{
    public function index()
    {
        $documentos = DocDocumento::all();
        return response()->json([
            'success' => true,
            'status' => 200,
            'data' => $documentos
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'doc_nombre'=> 'required|string',
            'doc_codigo'=> 'required|string',
            'doc_contenido'=> 'required|string',
            'pro_proceso_id'=> 'required|exists:pro_procesos,id',
            'tip_tipodoc_id'=> 'required|exists:tip_tipo_docs,id',
        ]);

        $documentos = DocDocumento::create($validatedData);

        return response()->json([
            'success' => true,
            'status' => 201,
            'message' => 'documento creado correctamente'

        ]);
    }

    

    public function show($id)
    {
        $documento = DocDocumento::findOrFail($id);
        return response()->json([
            'success' => true,
            'status' => 200,
            'data' => $documento
        ]);
    }

    public function update(Request $request, $id)
    {
        $documento = DocDocumento::find($id);

        if (!$documento) {
            return response()->json(['message' => 'DocDocument not found'], 404);
        }

        $validatedData = $request->validate([
            'doc_nombre'=> 'string',
            'doc_codigo'=> 'string',
            'doc_contenido'=> 'string',
            'pro_proceso_id'=> 'exists:pro_procesos,id',
            'tip_tipodoc_id'=> 'exists:tip_tipo_docs,id',
        ]);

        $documento->update($validatedData);

        return response()->json([
            'success' => true,
            'status' => 201,
            'message' => 'Documento actuallizado correctamente'

        ]);
    }

    public function destroy($id)
    {
        $documento = DocDocumento::find($id);

        if (!$documento) {
            return response()->json(['message' => 'DocDocument not found'], 404);
        }

        $documento->delete();

        return response()->json(['message' => 'DocDocument deleted']); 
    }
}
