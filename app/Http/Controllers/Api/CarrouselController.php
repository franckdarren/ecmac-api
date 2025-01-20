<?php

namespace App\Http\Controllers\Api;

use App\Models\Carrousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarrouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Carrousel::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string',
            'url_image' => 'required|string',
            'lien' => 'nullable|string',
            'num_ordre' => 'required|integer',
            'isActif' => 'boolean',
        ]);

        $carrousel = Carrousel::create($validated);

        return response()->json($carrousel, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrousel = Carrousel::findOrFail($id);
        return response()->json($carrousel, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carrousel = Carrousel::findOrFail($id);
        $validated = $request->validate([
            'description' => 'sometimes|string',
            'url_image' => 'sometimes|string',
            'lien' => 'nullable|string',
            'num_ordre' => 'sometimes|integer',
            'isActif' => 'boolean',
        ]);

        $carrousel->update($validated);

        return response()->json($carrousel, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carrousel = Carrousel::findOrFail($id);
        $carrousel->delete();

        return response()->json(null, 204);
    }
}
