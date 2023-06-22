<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $product_makanan = Product::where('category', 'makanan')->get();
    $product_minuman = Product::where('category', 'minuman')->get();

    $views = [
        'title' => 'menu',
        'products_makanan' => $product_makanan,
        'products_minuman' => $product_minuman,
    ];
    return view('menu.menu', $views);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
        return redirect('/');
        }
        
        return view('tambah.index', [
            'title' => 'tambah',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            $title = $request->input('title');
            $description = $request->input('description');
            $price = $request->input('price');
            $category = $request->input('category');
    
            Product::create([
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'category' => $category,
            ]);

            return redirect('menu');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::where('id', $id)->first();

        $view = [
            'title' => 'Product Detail',
            'product' => $product,
        ];
        return view('web.detail', $view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
