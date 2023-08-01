@include('seller.header')

    <div class="container mb-5 py-5">
    <div class="mx-auto justify-center w-4/5 shadow-lg">
        <div class="card p-5">
            <h2 class="text-center font-semibold"> {{ $product -> name }} </h2>
            <h2 class="text-center font-semibold text-muted"> Edit Product id: {{ $product -> id }} </h2>
            <form method="POST" action="/seller/{{ $product->id }}/update" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="text-lg font-semibold mb-1">Name</label>
                    <input type="text" name="name" class="form-control shadow-md" value=" {{ old('name', $product -> name ) }} " />
                    @if ($errors->has('name'))
                        <span class="text-danger"> {{ $errors->first('name') }} </span>
                    @endif
                </div>
                
                <div class="form-group mt-3">
                    <label class="text-lg font-semibold mb-1">Description</label>
                    <textarea class="form-control" rows="4" name="description"> {{ old('description', $product -> description ) }} </textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger"> {{ $errors->first('description') }} </span>
                @endif
                </div>
                
                <div class="form-group mt-3">
                    <label class="text-lg font-semibold mb-1">Price</label>
                    <input type="number" name="price" class="form-control shadow-md" value="{{ old('price', $product->price) }}" />
                    @if ($errors->has('price'))
                    <span class="text-danger"> {{ $errors->first('price') }} </span>
                @endif
                </div>

                                <!-- Add the color input -->
                <!-- Add the size input -->
<div class="form-group mt-3">
    <label class="text-lg font-semibold mb-1">Size</label>
    <select name="size" class="form-control shadow-md">
        <option value="xs" @if(old('size', $product->size) === 'xs') selected @endif>XS</option>
        <option value="s" @if(old('size', $product->size) === 's') selected @endif>S</option>
        <option value="m" @if(old('size', $product->size) === 'm') selected @endif>M</option>
        <option value="l" @if(old('size', $product->size) === 'l') selected @endif>L</option>
        <option value="xl" @if(old('size', $product->size) === 'xl') selected @endif>XL</option>
    </select>
    @if ($errors->has('size'))
        <span class="text-danger">{{ $errors->first('size') }}</span>
    @endif
</div>

<!-- Add the color input -->
<div class="form-group mt-3">
    <label class="text-lg font-semibold mb-1">Color</label>
    <select name="color" class="form-control shadow-md">
        <option value="white" @if(old('color', $product->color) === 'white') selected @endif>white</option>
        <option value="black" @if(old('color', $product->color) === 'black') selected @endif>black</option>
        <option value="blue" @if(old('color', $product->color) === 'blue') selected @endif>blue</option>
        <option value="red" @if(old('color', $product->color) === 'red') selected @endif>Red</option>
        <option value="orange" @if(old('color', $product->color) === 'orange') selected @endif>Orange</option>
        <option value="yellow" @if(old('color', $product->color) === 'yellow') selected @endif>Yellow</option>
    </select>
    @if ($errors->has('color'))
        <span class="text-danger">{{ $errors->first('color') }}</span>
    @endif
</div>




                <div class="form-group mt-3">
                    <label class="text-lg font-semibold">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                    <span class="text-danger"> {{ $errors->first('image') }} </span>
                @endif
                </div>

                <button type="submit" class="text-lg text-white py-2 px-2 mt-3 font-semibold bg-gray-800 hover:bg-gray-600 rounded-md"> Submit</button>

            </form>
        </div>
    </div>
    </div>
    

@include('partials.footer')