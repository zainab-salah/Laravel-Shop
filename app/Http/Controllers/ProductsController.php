<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function add()
    {
        return view('add');

    }
    
        public function store(Request $request)
    {

        if (Auth::user()->roles!="admin"){
            return redirect("/");
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'photo' => $request->file('file')->store('public/imgs'),
        ]);
        return redirect('/');
    }
     
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];

            session()->put('cart', $cart);

            return redirect("/");
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}