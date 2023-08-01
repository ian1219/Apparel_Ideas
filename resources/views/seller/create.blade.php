@include('seller.header')

    <div class="container mb-10 py-5">
    <div class="mx-auto justify-center w-4/5 shadow-lg">
        <div class="card mt-3 p-5">
            <h2 class="text-center font-semibold">Add New product</h2>
            <form method="POST" action="{{ route('seller.store') }}" enctype="multipart/form-data" class=" py-12">
                @csrf
                <div class="form-group">
                    <label class="text-lg font-semibold mb-1">Name</label>
                    <input type="text" name="name" class="form-control shadow-md" value=" {{ old('name') }} " />
                    @if ($errors->has('name'))
                        <span class="text-danger"> {{ $errors->first('name') }} </span>
                    @endif
                </div>
                
                <div class="form-group mt-3">
                    <label class="text-lg font-semibold mb-1">Description</label>
                    <textarea class="form-control" rows="4" name="description"> {{ old('description') }} </textarea>
                    @if ($errors->has('description'))
                    <span class="text-danger"> {{ $errors->first('description') }} </span>
                @endif
                </div>
                
                <div class="form-group mt-3">
                    <label class="text-lg font-semibold mb-1">Price</label>
                    <input type="number" name="price" class="form-control shadow-md" />
                    @if ($errors->has('price'))
                    <span class="text-danger"> {{ $errors->first('price') }} </span>
                @endif
                </div>

                <!-- Add the size input -->
                <div class="form-group mt-3 flex items-center space-x-4">
                    <label class="text-lg font-semibold mb-1 w-20">Size</label>
                    <div class="flex space-x-2">
                        <!-- For each size option, use a hidden input to store the selected value -->
                        <input type="hidden" name="size[]" value="xs" id="size-xs" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleSize('xs')">XS</button>

                        <input type="hidden" name="size[]" value="s" id="size-s" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleSize('s')">S</button>

                        <input type="hidden" name="size[]" value="s" id="size-m" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleSize('m')">M</button>

                        <input type="hidden" name="size[]" value="s" id="size-l" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleSize('l')">L</button>

                        <input type="hidden" name="size[]" value="s" id="size-xl" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleSize('xl')">XL</button>

                        <!-- ... Repeat for other size options ... -->

                    </div>
                    @if ($errors->has('size'))
                        <span class="text-danger">{{ $errors->first('size') }}</span>
                    @endif
                </div>

                <!-- Add the color input -->
                <div class="form-group mt-3 flex items-center space-x-4">
                    <label class="text-lg font-semibold mb-1 w-20">Color</label>
                    <div class="flex space-x-2">
                        <!-- For each color option, use a hidden input to store the selected value -->
                        <input type="hidden" name="color[]" value="white" id="color-white" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleColor('white')">
                            <span class="w-5 h-5 rounded-full border border-black bg-white"></span>
                        </button>

                        <input type="hidden" name="color[]" value="black" id="color-black" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleColor('black')">
                            <span class="w-5 h-5 rounded-full border border-black bg-black"></span>
                        </button>

                        <input type="hidden" name="color[]" value="black" id="color-black" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleColor('black')">
                            <span class="w-5 h-5 rounded-full border border-black bg-violet-500"></span>
                        </button>

                        <input type="hidden" name="color[]" value="black" id="color-black" />
                        <button type="button" class="border-2 border-gray-300 rounded-full w-7 h-7 focus:outline-none flex items-center justify-center" onclick="toggleColor('black')">
                            <span class="w-5 h-5 rounded-full border border-black bg-red-500"></span>
                        </button>
                        <!-- ... Repeat for other color options ... -->

                    </div>
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


    <script>
        function toggleSize(size) {
            const sizeInput = document.getElementById(`size-${size}`);
            sizeInput.value = sizeInput.value ? '' : size;
        }
    
        function toggleColor(color) {
            const colorInput = document.getElementById(`color-${color}`);
            colorInput.value = colorInput.value ? '' : color;
        }
    </script>
    
    

@include('partials.footer')