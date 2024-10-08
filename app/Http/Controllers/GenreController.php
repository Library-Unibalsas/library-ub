<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Routing\Controller;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function store(GenreRequest $request)
    {
        $genre = Genre::create($request->validated());
        return response()->json($genre, 201);
    }

    public function show(Genre $genre)
    {
        return $genre;
    }

    public function update(GenreRequest $request, Genre $genre)
    {
        $genre->update($request->validated());
        return response()->json($genre, 200);
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return response()->json(null, 204);
    }
}
