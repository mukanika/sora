<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class SeasonController extends Controller
{
    public function getRegister()
    {
        $seasons = Season::all();

        return view('register', compact('seasons'));
    }

    public function postRegister(Request $request)
    {
        $form = $request->all();
        dd($form);
         Product::create($form);
      
    }
}