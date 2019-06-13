<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ingredient;

class IngredientsController extends Controller
{

    public function index()
    {

        return view('ingredients', ['ingredients' => Ingredient::orderBy('id', 'DESC')->get()]);
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient;
        try {
            $ingredient->name = $request->name;
            $ingredient->save();
        } catch (Exception $e) {
            echo json_encode(array('success' => false));
        }
        echo json_encode(array('success' => true));
    }
}
