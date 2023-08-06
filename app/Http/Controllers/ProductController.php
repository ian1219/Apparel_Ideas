<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    public function index()
    {
        $products = Product::all();
        $latestProducts = Product::latest()->take(5)->get();
    
        // Pass the data to the view
        return view('products.index', compact('products', 'latestProducts'));
    }


    public function sell()
    {
    $products = Product::all();
    return view('seller.sell', compact('products'));
    }
    
    public function shop()
    {
        $products = Product::all();
        return view('seller.shop', compact('products'));
    }

    public function register()
    {
        return view('seller.register');
    }

    public function create(){
        return view('seller.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('seller.sell')->withSuccess('Product created successfully');

    }

    public function edit($id){
        
        $product = Product::where('id', $id)->first();

        return view('seller.edit', ['product' => $product]);
    } 

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $product = Product::where('id', $id)->first();

        if(isset($request-> images)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
       
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('seller.sell')->withSuccess('Product Updated successfully!');

    }

    public function destroy($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->route('seller.sell')->withSuccess('Product Deleted successfully!');
    }


    public function item($id)
{
    $product = Product::find($id);
    $products = Product::all(); // Assuming you have a products table
    $cartCount = Cart::where('user_id', auth()->user()->id)->count();
    return view('products.item', compact('product', 'products', 'cartCount'));
}


    public function home(){
        return view('landing.home', ['products' => Product::get()]);
    }

    public function sight($id){
        $product = Product::find($id);
        $products = Product::all(); // Assuming you have a products table
        return view('landing.sight')->with('product', $product)->with('products', $products);
    }

    public function search(Request $request)
{
    $query = $request->input('search');
    $products = Product::where('name', 'like', '%' . $query . '%')
                       ->orWhere('description', 'like', '%' . $query . '%')
                       ->orWhere('price', 'like', '%' . $query . '%')
                       ->get();

    return view('products.prod', compact('products'));
}

public function addToCart(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'quantity' => 'integer|min:1',
    ]);

    $quantity = $request->input('quantity', 1);
    $cartItem = Cart::where('user_id', auth()->user()->id)->where('product_id', $id)->first();

    if ($cartItem) {
        $cartItem->quantity += $quantity;
        $cartItem->save();
    } else {
        Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id,
            'quantity' => $quantity,
        ]);
    }

    // Redirect back to the previous page after adding to cart
    return back()->withSuccess('Product added to cart successfully!');
}

public function showCart()
{
    $cartItems = Cart::where('user_id', auth()->user()->id)->with('product')->get();

    return view('products.cart', compact('cartItems'));
}

public function prod()
{
    $products = Product::get();
    // Fetch cart count for the current user
    $cartCount = Cart::where('user_id', auth()->user()->id)->count();
    // Set the $cartItemCount variable before rendering the view
    $cartItemCount = $cartCount;
    return view('products.prod', compact('products', 'cartItemCount'));
}

public function deleteFromCart($id)
{
    $cartItem = Cart::where('user_id', auth()->user()->id)->where('id', $id)->first();

    if ($cartItem) {
        $cartItem->delete();
    }

    return redirect()->route('products.cart')->withSuccess('Product removed from cart successfully!');
}
 


}
