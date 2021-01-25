    <x-app-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight nomargin">
            {{ __('Product List') }}
        </p>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>All Products</h2>
            <div class="uk-padding uk-margin">             
                <div uk-grid>
                    <div class="uk-width-1-3">
                        <a class="uk-button uk-button-primary" href="{{ route('products.create') }}">Add a New Product</a>
                    </div>
                    <div class="uk-width-2-3">
                        <form class="uk-form-stacked" method="POST" action="{{ route('searchproduct') }}">@csrf
                            <div class="uk-margin">
                                <label class="uk-form-label" for="searchkey">Search</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="searchkey" type="text" name="searchkey" placeholder="Search with name">
                                </div>
                            </div>                            
                            <button class="uk-button uk-button-default" type="success">Search</button>
                        </form>
                    </div>
                </div>             
            </div>
            
            <div class="bg-white overflow-hidden shadow-xl">                
                <table class="uk-table uk-table-middle uk-table-hover uk-table-divider">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><img src="{{ Storage::url($product->image) }}" height="75" width="75" /></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->cattegory }}</td>
                            <td>      
                                <div class="uk-button-group">
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">            
                                        <a class="uk-button uk-button-secondary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="uk-button uk-button-danger">Delete</button>
                                    </form>
                                </div>     
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
