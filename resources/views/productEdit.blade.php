<x-app-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight nomargin">
            {{ __('Product Update') }}
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Product Update</h2>
            <form class="uk-form-horizontal uk-margin-large" action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="uk-margin">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Product Name" value="{{ $product->name }}">
                        @error('name')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="cattegory">Category</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cattegory" name="cattegory">
                            <option value="Cat1">Cat1</option>
                            <option value="Cat1">Cat2</option>
                        </select>
                    </div>
                    @error('cattegory')
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="description">Description</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" name="description" id="description" rows="5" placeholder="Product Description">{{ $product->description }}</textarea>
                        @error('description')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="price">Price</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="price" name="price" type="number" step=".01" placeholder="Product Price" value="{{ $product->price }}">
                        @error('price')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="image">Image</label>
                    <div class="uk-form-controls" uk-form-custom="target: true">
                        <input type="file" name="image">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                        @error('image')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="uk-button uk-button-default">Submit</button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
