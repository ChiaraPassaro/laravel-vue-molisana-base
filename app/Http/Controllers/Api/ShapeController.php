<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shapes = Shape::all();

        if ($shapes->count()) {
            return response()->json([
                'response' => true,
                'count' => $shapes->count(),
                'result' =>  $shapes
            ]);
        }

        return response()->json([
            'response' => false,
            'count' => 0,
            'result' => []
        ]);
    }

   
}
