@include('partials.header')


<section class="mx-auto w-fit p-12">
    <!-- Grid Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
      @foreach ($products as $product)
      <!-- Card -->
      <a href="/products/{{ $product->id }}/item" class="w-72 h-fit group shadow-md no-underline rounded-b-md hover:-translate-y-2">
        <div class="relative overflow-hidden rounded-t-md ">
          <img class="h-96 w-full object-cover" src="/products/{{ $product->image }}" alt="">
          <p class="mb-3 mt-3 font-bold text-center text-lg text-gray-700 dark:text-gray-400">{{ $product->name }}</p>
        </div>
      </a>
      @endforeach
    </div>
  </section>
  
  
  
  
    

@include('partials.footer')