<?php

namespace App\Http\Controllers;

use App\Product;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();
        $items = MenuItem::where('menu_id', 2)->take(8)->get();
        // dd($items);
        return view('landing-page')->with(['products' => $products, 'items' => $items]);
    }
}
