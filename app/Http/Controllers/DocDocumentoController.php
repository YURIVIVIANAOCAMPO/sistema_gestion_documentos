<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocDocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();
        return response()->json($documentos);
    }

    public function store(Request $request)
    {
       
    }

    public function show($id)
    {
        $documento = Documento::findOrFail($id);
        return response()->json($documento);
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
