<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function init() {
        return response()->json([
            'data' => FilmResource::collection(Film::all())
        ]);
    }

    public function test() {
        return response()->json([
            'films' => FilmResource::collection(Film::all())
        ]);
    }
}
