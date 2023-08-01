@section('content')
    <div class="container">
        <h1>Search Results</h1>
        @if ($products->isEmpty())
            <p>No products found.</p>
        @else
            <ul>
                @foreach ($products as $product)
                    <li>
                        <a href="{{ route('products.item', $product->id) }}">{{ $product->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection