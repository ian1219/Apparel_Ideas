@include('policies.header')


<section class="flex text-gray-600 body-font bg-sky-100">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-lg font-bold tracking-normal uppercase mb-3 text-gray-600">Terms and policies of Apparel Ideas E-Store</h1>
    <h1 class="text-3xl font-semibold uppercase tracking-wide mb-8 text-gray-800">
      The terms and policies pertaining to individuals seeking information about our e-commerce enterprise are consolidated within a singular location.</h1>
    <div class="flex flex-wrap -m-4">
      
      <div class="p-4 md:w-1/3">
        <a href="{{ route('policies.terms') }}" class="no-underline">
          <div class="h-full rounded-lg overflow-hidden">
            <img class="max-w-full mx-auto sm:mx-4 md:mx-6 lg:mx-8 mb-4 p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700" src="{{ asset('policies/terms.png') }}" alt="blog">
            <div class="p-6 flex">
              <img class="h-11 mr-4 rounded-lg" src="{{ asset('logo/icon.png') }}" alt="">
              <div class="mx-3">
                <h1 class="title-font text-2xl font-bold text-gray-900">Terms of Service</h1>
                <p class="leading-relaxed text-gray-500">Privacy of Apparel Ideas and how to use.</p>
              </div>
            </div>
          </div>
          
        </a>
      </div>

      <div class="p-4 md:w-1/3">
        <a href="{{ route('policies.privacy') }}" class="no-underline">
          <div class="h-full rounded-lg overflow-hidden">
            <img class="max-w-full mx-auto sm:mx-4 md:mx-6 lg:mx-8 mb-4 p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700" src="{{ asset('policies/privacy.png') }}" alt="blog">
            <div class="p-6 flex">
              <img class="h-11 mr-4 rounded-lg" src="{{ asset('logo/icon.png') }}" alt="">
              <div class="mx-3">
                <h1 class="title-font text-2xl font-bold text-gray-900">Privacy Policy</h1>
                <p class="leading-relaxed text-gray-500">Privacy of Apparel Ideas and how to use.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      
      <div class="p-4 md:w-1/3">
        <a href="{{ route('policies.community') }}" class="no-underline">
          <div class="h-full rounded-lg overflow-hidden">
            <img class="max-w-full mx-auto sm:mx-4 md:mx-6 lg:mx-8 mb-4 p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700" src="{{ asset('policies/community.png') }}" alt="blog">
            <div class="p-6 flex">
              <img class="h-11 mr-4 rounded-lg" src="{{ asset('logo/icon.png') }}" alt="">
              <div class="mx-3">
                <h1 class="title-font text-2xl font-bold text-gray-900">Standards Community</h1>
                <p class="leading-relaxed text-gray-500">Privacy of Apparel Ideas and how to use.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      

    </div>
  </div>
</section>




  @include('partials.footer')