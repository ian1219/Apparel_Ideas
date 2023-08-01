<main>
<nav class="bg-gray-800">
  <main style="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
              <div class="flex-shrink-0">
               <a href="/"> <img src="{{ asset('logo/Apparel_Ideas.png') }}" alt="Logo" class="logo rounded-md w-12 h-12 md:w-32 lg:w-40"></a>
              </div>
              <div class="relative flex mx-14">
                <form action="{{ route('products.search') }}" method="GET">
                    <input type="text" name="search" placeholder="Search" class="bg-gray-100 text-gray-800 rounded-3xl px-3 py-2 focus:outline-none focus:ring focus:ring-cyan-600 focus:border-cyan-600" />
                    <button type="submit" class="absolute right-0 top-0 h-full px-2">
                        <!-- Replace the icon class with your desired icon -->
                        <svg class="w-4 h-4 mx-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </form>
            </div>
              <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                      <a href="/" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Home</a>
                      <a href="{{ route('products.prod') }}" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Products</a>
          
                      <a href="{{ route('products.cart') }}" class="relative flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                        </svg>
                        <!-- Cart Item Count Badge -->
                        <span class="absolute top-0 right-0 h-4 w-4 bg-blue-500 text-white text-xs rounded-full flex items-center justify-center">{{ $cartItemCount }}</span>
                    </a>

                      <a href="{{ route('policies.terms&policy') }}" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">About</a>
                      <a href="/contact" class="text-gray-300 hover:bg-cyan-900 hover:text-white rounded-md no-underline px-3 py-2 text-md font-medium">Contact Us</a>
                  </div>
              </div>
          </div>

          <div class="relative inline-block text-left" style="z-index: 10;">
            <form action="{{ route('logout') }}" method="POST" class="ml-4">
              @csrf
              @method('DELETE')
           <button type="button" id="profileBtn" class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.3em" viewBox="0 0 448 512">
              <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
             </button>
          <div id="profileMenu" class="hidden absolute right-0 w-60 mt-2 origin-top-right bg-white rounded-md shadow-lg">
            <div class="border-b text-center bg-sky">
            <p class=" mt-3 text-lg font-semibold"> {{ Auth::user()->name }}</p>
          </div>
            <div class="py-1">
              <a href="#" class="block px-4 py-2 text-sm mb-2 font-semibold text-gray-700 hover:bg-gray-100 no-underline">Profile</a>
              <a href="{{ route('seller.sell') }}" class="block px-4 py-2 text-sm mb-2 font-semibold text-gray-700 hover:bg-gray-400 no-underline">Admin</a>
              <a href="#" class="block px-4 py-2 text-sm mb-2 font-semibold text-gray-700 hover:bg-gray-100 no-underline">Settings & Privacy</a>
              <a href="#" class="block px-4 py-2 text-sm mb-2 font-semibold text-gray-700 hover:bg-gray-100 no-underline">Help & Support Center</a>
              <div class="border-t border-gray-200"></div>
              <a class="block px-4 py-2 text-sm mb-2 font-semibold text-gray-700 hover:bg-gray-100 no-underane">
              <button type="submit">Logout</button>
            </a>
            </div>
          </div>
          </form>
        </div>
        

<script>
  const profileBtn = document.getElementById('profileBtn');
  const profileMenu = document.getElementById('profileMenu');
  const logoutBtn = document.getElementById('logoutBtn');

  profileBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
  });

  logoutBtn.addEventListener('click', () => {
    // Add logout functionality here
    console.log('Logout clicked');
  });
</script>

          
          
      </div>
  </div>
</nav>

