<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::simplePaginate(6); 
       return view('index', ['products' => $products]); 
       
    }

    public function description(Request $request)
    {
        $product = $request->only(['name', 'price', 'image', 'description']);
        return view('description', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $product = $request->only(['name', 'price', 'image', 'description']);
        Product::create($product);
    }

    public function admin(Request $request)
    {
        $products = product::with('season')->Paginate(6);
        $seasons = Season::all();

        return view('admin', ['products' => $products, 'seasons' => $seasons]);
    }

    public function search(Request $request)
    {
        $products = Product::with('product_season')->Prodct_seasonSearch($request->product_id)
        ->KeywordSearch($request->keyword)->SeasonSearch('$request'->season_id)->Paginata(4);
        $seasons = Season::all();

        return view('admin', ['products' => $products, 'seasons' => $seasons, 'product_season' => $product_season]);
    }

    

}
