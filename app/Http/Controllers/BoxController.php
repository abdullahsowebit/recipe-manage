<?php

namespace App\Http\Controllers;

use App\Box;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class BoxController extends Controller
{
    public function index()
    {
        $box = Box::all();
        if ($box != null) {
            return $box;
        } else {
            return response()->json('No User Box Found', 400);
        }
    }
    public function create()
    {
        $validator = Validator::make(request()->all(), [
            'recipe' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $attributes['recipe'] = request()->input('recipe');

        auth()->user()->box()->create($attributes);
        return 'Successfully created box for user';
    }
    public function delete()
    {
        $box = Box::where('id', request()->input("id"))->first();

        if ($box) {
            $box->delete();

            return "User Box Deleted";
        }
    }
    
}
