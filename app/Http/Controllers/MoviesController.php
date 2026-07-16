<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;
use App\Models\Movies;
use Illuminate\Http\JsonResponse;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $movies = Movies::all();

        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMoviesRequest $request)
    {
    $movie = Movies::create($request->validated());

    return response()->json([
        'message' => 'Movie created successfully',
        'data' => $movie,
    ], 201);       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movies::find($id);

        if (!$movie) {
            return response()->json([
                'message' => 'Movie not found',
            ], 404);
        }

        return response()->json($movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMoviesRequest $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $movies)
    {
        //
    }
}