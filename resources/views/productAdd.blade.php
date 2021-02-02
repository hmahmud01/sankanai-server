<x-app-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight nomargin">
            {{ __('Product Addition') }}
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Add A Products</h2>
            <form class="uk-form-horizontal uk-margin-large" action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="uk-margin">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Product Name">
                        @error('name')
                        <div class="uk-alert-danger" uk-alert>
                            <a class="uk-alert-close" uk-close></a>
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="main_category">Main Category</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="main_category" name="main_category" onchange="catrender()">
                            <option value="none">None</option>
                            <option value="bedroom">Bedroom Section</option>                            
                            <option value="mattress">Mattress Section</option>
                            <option value="dining">Dining Section</option>
                            <option value="living">Living Room Section</option>
                            <option value="accent">Accent Section</option>                            
                        </select>
                    </div>
                </div>

                <div class="uk-margin" id="bedroom">
                    <label class="uk-form-label" for="cat_bed">Bedroom Section</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cat_bed" name="cat_bed">
                            <option value="allsizesbed">All Sizes Beds only</option>
                            <option value="adultbed">Adult Bedroom Sets</option>    
                            <option value="childrenbed">Children/Youth Bedroom Sets</option>
                            <option value="bunkbed">Bunk Beds</option>  
                            <option value="trundle">Trundle/Day/Rollway Beds</option>
                            <option value="headboards">Headboards Only</option>  
                            <option value="bedframes">Bed Frames</option>
                            <option value="drawers">Drawers Chests</option>  
                            <option value="dresser">Dresser Mirrors</option>
                            <option value="wardrobes">Armoires/Wardrobes</option>  
                            <option value="bedside">Bedside Lamps</option>
                        </select>
                    </div>
                    @error('cattegory')
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <div class="uk-margin" id="mattress">
                    <label class="uk-form-label" for="cat_mattress">Mattress Section</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cat_mattress" name="cat_mattress">
                            <option value="basicmattresses">Basic Mattresses</option>
                            <option value="hardmattresses">Hard/Firm Mattress</option>    
                            <option value="mediummattresses">Medium FIrm Mattress</option>
                            <option value="softmattresses">Soft/Plush Mattress</option> 
                            <option value="childrenmattresses">Children/Youth Mattress</option>
                            <option value="memorymattress">Memory/Gel Hybrid Mattress</option> 
                            <option value="luxurymattress">Luxury in Lowest Price Mattress</option>
                            <option value="rollmattress">Roll Pack BOxed Mattress</option> 
                            <option value="boxsprings">Box Springs</option>
                            <option value="pillow">Pillows/Comforters</option> 
                            <option value="bedsheets">Bed Sheets</option>                            
                        </select>
                    </div>
                    @error('cattegory')
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="uk-margin" id="dining">
                    <label class="uk-form-label" for="cat_dining">Dining Section</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cat_dining" name="cat_dining">
                            <option value="smalldine">Small Size Dinettes</option>
                            <option value="mediumdine">Medium Size Dining Sets</option>
                            <option value="largedine">Large Size Dining Sets</option>    
                            <option value="glassdine">Glass top Dining Sets</option>
                            <option value="pubdine">Pub Height Dining Sets</option>    
                            <option value="tables">Tables Only</option>
                            <option value="chairs">Chairs Only</option>    
                            <option value="barstools">Barstools/Counter Stools</option>
                            <option value="servers">Servers</option>    
                            <option value="hutch">Hutch Buffets</option>
                            <option value="diningaccessories">Dining Accesories</option>                                
                        </select>
                    </div>
                    @error('cattegory')
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="uk-margin" id="living">
                    <label class="uk-form-label" for="cat_living">Living Room Section</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cat_living" name="cat_living">
                            <option value="fabricsofa">Fabric Sofas & Sectionals</option>
                            <option value="leathersofa">Leather Sofas & Sectionals</option>              
                            <option value="classicsofa">Classic Traditional Sofa Sets</option>
                            <option value="reclinersofa">All Types of Recliner Sofa Sets</option>       
                            <option value="sofabeds">Sofa Beds</option>
                            <option value="klickklack">Klick Klack/ Futons </option>       
                            <option value="accentarm">Accent/Arm/Rocking Chairs</option>
                            <option value="ottomans">Ottomans & Benches</option>       
                            <option value="coffeetable">Coffee/End/Hall table sets</option>
                            <option value="rugs">Rugs & Carpets</option>                     
                            <option value="mirrors">Mirrors</option>
                        </select>
                    </div>
                    @error('cattegory')
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="uk-margin" id="accent">
                    <label class="uk-form-label" for="cat_accent">Accent Section</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="cat_accent" name="cat_accent">
                            <option value="lamps">Lamps & Lights</option>
                            <option value="studydesk">Study/ Computer Desks</option>    
                            <option value="officedesk">Office/ Study Chairs</option>
                            <option value="bookshelves">Bookshelves</option> 
                            <option value="decorationshelves">Decoration Shelves</option>
                            <option value="microstand">Micro oven Stands/Shelves</option> 
                            <option value="coathanger">Coat Hangers</option>
                            <option value="mentaframe">Metal Frames</option> 
                            <option value="decorationaccessories">Decoration Accessories</option>
                            <option value="clocks">Clocks</option> 
                            <option value="furniturecare">Furniture Care Products</option>
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
                        <textarea class="uk-textarea" name="description" id="description" rows="5" placeholder="Product Description"></textarea>
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
                        <input class="uk-input" id="price" name="price" type="number" step=".01" placeholder="Product Price">
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

                <button class="uk-button uk-button-default">Submit</button>

                </form>
            </div>
        </div>
    </div>

    @section('scripts')
    <script>
        var bedroom = document.getElementById("bedroom");
        var mattress = document.getElementById("mattress");
        var dining = document.getElementById("dining");
        var living = document.getElementById("living");
        var accent = document.getElementById("accent");

        window.onload = function(){
            hideContent();
        }

        function catrender(){
            var main_cat = document.getElementById("main_category").value;

            if(main_cat == "none"){
                hideContent();
            }else if(main_cat == "bedroom"){
                togglebedroom();
            }else if(main_cat == "mattress"){
                togglemattress();
            }else if(main_cat == "dining"){
                toggledining();
            }else if(main_cat == "living"){
                toggleliving();
            }else if(main_cat == "accent"){
                toggleaccent();
            }else{
                hideContent();
            }
        }

        function hideContent() {
            bedroom.style.display = "none";
            mattress.style.display = "none";
            dining.style.display = "none";
            living.style.display = "none";
            accent.style.display = "none";
        }

        function togglebedroom(){
            accent.style.display = "none";
            mattress.style.display = "none";
            dining.style.display = "none";
            living.style.display = "none";
            if(bedroom.style.display == "none"){
                bedroom.style.display = "block";
            }else{
                bedroom.style.display = "none";
            }            
        }

        function togglemattress(){
            bedroom.style.display = "none";
            accent.style.display = "none";
            dining.style.display = "none";
            living.style.display = "none";
            if(mattress.style.display == "none"){
                mattress.style.display = "block";
            }else{
                mattress.style.display = "none";
            }            
        }

        function toggledining(){
            bedroom.style.display = "none";
            mattress.style.display = "none";
            accent.style.display = "none";
            living.style.display = "none";
            if(dining.style.display == "none"){
                dining.style.display = "block";
            }else{
                dining.style.display = "none";
            }            
        }

        function toggleliving(){
            bedroom.style.display = "none";
            mattress.style.display = "none";
            dining.style.display = "none";
            accent.style.display = "none";
            if(living.style.display == "none"){
                living.style.display = "block";
            }else{
                living.style.display = "none";
            }            
        }

        function toggleaccent(){
            bedroom.style.display = "none";
            mattress.style.display = "none";
            dining.style.display = "none";
            living.style.display = "none";
            if(accent.style.display == "none"){
                accent.style.display = "block";
            }else{
                accent.style.display = "none";
            }            
        }
    </script>
    @endsection
</x-app-layout>
