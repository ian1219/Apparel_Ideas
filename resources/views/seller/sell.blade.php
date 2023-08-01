@include('seller.header')



    <div class="container overflow-x-auto shadow-lg sm:rounded-lg mb-5 mt-5">
        <div class="text-right mt-4">
            <a href="/seller/create" class=" py-2 px-4 bg-gray-800 text-white 
            font-semibold rounded-lg shadow-md hover:bg-gray-600 focus:outline-none 
            focus:ring-2 focus:ring-blue-400 no-underline focus:ring-opacity-75"> New Product</a>
        </div>
    
        <table class="w-full mt-5 mb-5 text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  product ID
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Description
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Price
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Image
                </th>
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->id }}</td>
                <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->name }}</td>
                <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->description }}</td>
                <td scope="row" class="px-6 text-base py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->price }}</td>
                <td>
                  <img src="/products/{{ $product->image }}" class="rounded-full" width="60" height="60" alt="">
                </td>
                <td class="px-6 py-4">
                 <a href="/seller/{{ $product->id }}/edit" class="btn btn-dark btn-md">Edit</a> 
                 
                 <form method="POST" class="d-inline" action="{{ route('seller.delete', $product->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-md">Delete</button>
              </form>

              </td> 

              </th>
              </tr>  
              @endforeach
            </tbody>
          </table>

        </div>
          

@include('partials.footer')