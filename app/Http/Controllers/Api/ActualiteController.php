<?php

namespace App\Http\Controllers\Api;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Actualite::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url_image' => 'required|string',
            'description' => 'required|string',
            'jour' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'lieu' => 'required|string',
        ]);

        $actualite = Actualite::create($validated);
        return response()->json($actualite, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        return response()->json($actualite, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actualite = Actualite::findOrFail($id);
        $validated = $request->validate([
            'url_image' => 'sometimes|string',
            'description' => 'sometimes|string',
            'jour' => 'sometimes|date',
            'heure' => 'sometimes|date_format:H:i',
            'lieu' => 'sometimes|string',
        ]);

        $actualite->update($validated);

        return response()->json($actualite, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();

        return response()->json(null, 204);
    }
}
