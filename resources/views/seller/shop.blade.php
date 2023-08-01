@include('seller.header')


<section class="mx-auto w-fit p-12">
    <!-- Grid Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
      @foreach ($products as $product)
      <!-- Card -->
      
        <div class="relative overflow-hidden rounded-t-md ">
          <img class="h-96 w-full object-cover" src="/products/{{ $product->image }}" alt="">
          <p class="mb-3 mt-3 font-bold text-center text-lg text-gray-700 dark:text-gray-400">{{ $product->name }}</p>
        </div>
      
      @endforeach
    </div>
  </section>
  
  
  
  
    

@include('partials.footer')