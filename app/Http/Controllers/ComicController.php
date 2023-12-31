<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // ****VALIDATION****
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'numeric',
            'type' => 'string',
            'sale_date' => '',
            'series' => 'string',
        ]);


        $data = $request->all();
        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'numeric',
            'type' => 'string',
            'sale_date' => '',
            'series' => 'string',
        ]);

        $data = $request->all();

        // ! metodo 1
        // $comic->fill($data);
        // $comic->save();

        // ! metodo 2
        $comic->update($data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('delete', "$comic->title é stato eliminato con successo");
    }
}
