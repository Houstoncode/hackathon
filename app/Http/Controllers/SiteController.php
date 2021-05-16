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

    public function verifyTest(Request $request) {
        $tasks = Film::all()->first()->tasks;

        $obj = [];

        foreach($tasks as $index=>$task) {
            foreach ($task->answers as $key=>$answer) {
                if($answer->is_answer) {
                    $obj[$index] = $key;
                }
            }
        }

        $count = 0;

        foreach ($request->answers as $key=>$answer) {
            if($answer[$obj[$key]] === true) {
                $count += 1;
            }
        }

        return response()->json(['data' => ['countAnswers' => $count]]);
    }
}
