@include('landing.header')

 
<section class="text-gray-600 body-font bg-sky-100">
  <div class="flex flex-col text-center w-full shadow-md">
    <h1 class="sm:text-4xl text-2xl font-medium title-font mt-14 text-gray-900">Welcome to Apparel Ideas</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-10">Discover a wide range of stylish and trendy apparel for every occasion. Shop now and express your unique style with Apparel Ideas.</p>
  </div>
  <div class="container py-5 mx-auto flex flex-wrap">  
    <div class="lg:w-1/2 mt-20 w-full mb-10 lg:mb-0 overflow-hidden">
      <img alt="feature" class="object-cover rounded-lg object-center h-11/12 w-11/12" src="{{ asset('logo/icon.png') }}">
    </div>
    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-8 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 640 512">
            <path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"/></svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Quality Products</h2>
          <p class="leading-relaxed text-base">We offer high-quality apparel made from the finest materials to ensure durability and comfort.</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-8 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 576 512">
           <path d="M384 160c-17.7 0-32-14.3-32-32s14.3-32 32-32H544c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32s-32-14.3-32-32V205.3L342.6 374.6c-12.5 12.5-32.8 12.5-45.3 0L192 269.3 54.6 406.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160c12.5-12.5 32.8-12.5 45.3 0L320 306.7 466.7 160H384z"/></svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Fashion Trends</h2>
          <p class="leading-relaxed text-base">Stay ahead of the fashion game with our collection of trendy and stylish apparel.</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-8 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 448 512" >
            <path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Easy Shopping Experience</h2>
          <p class="leading-relaxed text-base">Enjoy a seamless shopping experience with our user-friendly website and secure payment options.</p>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-8 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 640 512">
            <path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Fast Shipping</h2>
          <p class="leading-relaxed text-base">We provide fast and reliable shipping services to ensure you receive your orders on time.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-auto w-fit p-12">
  <!-- Grid Container -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 ">
    @foreach ($products as $product)
    <!-- Card -->
    <a href="{{ route('auth.login') }}" class="w-72 h-fit group no-underline rounded-b-md hover:-translate-y-2 shadow-lg shadow-gray-400">
      <div class="relative overflow-hidden rounded-md bg-white">
        <img class="h-96 w-full object-cover" src="/products/{{ $product->image }}" alt="">
        <p class="mb-3 mt-3 font-bold text-center text-lg text-gray-700 dark:text-gray-400">{{ $product->name }}</p>
      </div>
    </a>
    @endforeach
  </div>
</div>
</section>

@include('partials.footer')