<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        if ($ingredients != null) {
            return $ingredients;
        } else {
            return response()->json('No Ingredients Found', 400);
        }
    }
    public function create()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'measure' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $attributes['name'] = request()->input('name');
        $attributes['measure'] = request()->input('measure');
        $attributes['supplier'] = request()->input('supplier');

        auth()->user()->ingredients()->create($attributes);
        return 'success';
    }
    public function delete()
    {
        $ingredient = Ingredient::where('id', request()->input("id"))->first();

        if ($ingredient) {
            $ingredient->delete();

            return "ingredient deleted";
        }
    }
    
}
