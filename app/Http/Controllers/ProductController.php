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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'size' => 'nullable|array', // Optional: Allow empty sizes array
            'color' => 'nullable|array', // Optional: Allow empty colors array
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new product and store the form data
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->size = implode(',', $validatedData['size'] ?? []);
        $product->color = implode(',', $validatedData['color'] ?? []);

        // Handle image upload and store the file path in the database
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        // Redirect the user to a success page or show a success message
        return redirect()->route('seller.success')->with('success', 'Product added successfully!');
    }


    public function edit($id){
        
        $product = Product::where('id', $id)->first();

        return view('seller.edit', ['product' => $product]);
    } 

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        'size' => 'required|in:xs,s,m,l,xl',
    'color' => 'required|in:white,black,blue,red,orange,yellow',
    ]);

    $product = Product::where('id', $id)->first();

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        $product->image = $imageName;
    }

    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->colors = json_encode($request->colors);
    $product->sizes = json_encode($request->sizes);

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
