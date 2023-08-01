@include('partials.header')

<div class="flex flex-col min-h-screen">
    @csrf
    @method('DELETE')
    <div class="container overflow-x-auto shadow-lg sm:rounded-lg mb-5 mt-5 flex-grow">
        <h2 class="text-center font-semibold text-2xl my-4">Shopping Cart</h2>
        <table class="w-full mt-5 mb-5 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Description
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Image
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Price
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Quantity
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Total
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $cartItem)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cartItem->product->name }}</td>
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cartItem->product->description }}</td>
                    <td scope="row">
                        <img src="products/{{ $cartItem->product->image }}" class="rounded-full" width="60" height="60" alt="">
                    </td>
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cartItem->product->price }}</td>
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cartItem->quantity }}</td>
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cartItem->product->price * $cartItem->quantity }}</td>
                    <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <form action="{{ route('cart.delete', $cartItem->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        <button type="submit" class="bg-gray-800 hover:bg-sky-800 text-white font-bold py-2 px-4 rounded">Check Out</button>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="{{ route('products.prod') }}" class="py-2 px-4 bg-gray-800 text-white font-bold text-lg rounded-lg shadow-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400 no-underline focus:ring-opacity-75">Continue Shopping</a>
        </div>
    </div>
    <div class="flex-shrink-0">
       
    </div>
</div>

@include('partials.footer')