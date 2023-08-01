@include('partials.header')
<div class="flex flex-col text-center w-full shadow-lg">
  <h1 class="sm:text-4xl text-2xl font-medium title-font mt-14 text-gray-900">New Arrival</h1>
  <p class="lg:w-2/3 mx-auto leading-relaxed text-base mb-2">Welcome to Apparel Ideas, your ultimate destination for original products! Delight in exploring our diverse selection, where you can seamlessly buy and sell exceptional items. Join our thriving community of discerning buyers and passionate sellers, and embark on a rewarding journey of discovery. Happy browsing, buying, and selling the finest products on our platform!</p>
</div>
<section class=" p-12">
  <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach ($latestProducts as $index => $product)
        <li data-bs-target="#productCarousel" data-bs-slide-to="{{ $index }}" @if ($index === 0) class="active" @endif></li>
      @endforeach
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      @foreach ($latestProducts as $index => $product)
        <div class="carousel-item @if ($index === 0) active @endif">
            <div class="relative overflow-hidden rounded-md">
              <img class="h-3/5 w-screen object-cover" src="/products/{{ $product->image }}" alt="">
            </div>
        </div>
      @endforeach
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</section>

@include('partials.footer')
