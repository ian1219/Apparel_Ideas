@include('seller.header')

    <div class="container mb-5 py-5">
    <div class="mx-auto justify-center w-4/5 shadow-lg">
        <div class="card mt-3 p-5">
            <h2 class="text-center font-semibold">Add New product</h2>
            <form method="POST" action="/seller/store" enctype="multipart/form-data">
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