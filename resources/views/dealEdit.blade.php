<x-app-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight nomargin">
            {{ __('Update Deal') }}
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="uk-form-horizontal uk-margin-large" action="{{ route('deals.update', $deal->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="uk-margin">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Product Name" value="{{ $deal->name }}">
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
                            <option value="deal">Deals & Promotions</option>
                            <option value="save">Save on Mattress</option>
                            <option value="clearance">Clearance</option>
                            <option value="children">Children/Youth/Students Furniture</option>
                            <option value="flyer">Monthly Flyer</option>
                            <option value="package">Package Deals</option>
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
                        <textarea class="uk-textarea" name="description" id="description" rows="5" placeholder="Product Description">{{ $deal->description }}</textarea>
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
                        <input class="uk-input" id="price" name="price" type="number" step=".01" placeholder="Product Price" value="{{ $deal->price }}">
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
