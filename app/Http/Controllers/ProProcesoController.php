<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProProceso;

class ProProcesoController extends Controller
{
    public function index()
    {
        $procesos = ProProceso::all();
        return response()->json($procesos);
    }
 
    public function show($id)
    {
        $proceso = ProProceso::findOrFail($id);
        return response()->json($proceso);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pro_nombre' => 'required|string',
            'pro_prefijo' => 'required|string',
        ]);

        $pro_proceso = ProProceso::create($validatedData);

        return response()->json($pro_proceso, 201);
    }

    public function update(Request $request, $id)
    {
        $pro_proceso = ProProceso::find($id);

        if (!$pro_proceso) {
            return response()->json(['message' => 'Pro_proceso not found'], 404);
        }

        $validatedData = $request->validate([
            'pro_nombre' => 'required|string',
            'pro_prefijo' => 'required|string',
        ]);

        $pro_proceso->update($validatedData);

        return response()->json($pro_proceso);
    }

    public function destroy($id)
    {
        $pro_proceso = ProProceso::find($id);

        if (!$pro_proceso) {
            return response()->json(['message' => 'Pro_proceso not found'], 404);
        }

        $pro_proceso->delete();

        return response()->json(['message' => 'Pro_proceso deleted']);
    }
}
