@extends('layout.master') 
@section('content')

<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Products Details</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Products Details</li>
                    </ul>
                </div>
            </div>
        </section>
<!-- End Page Title Area -->

        <!-- Start Product Details Area -->
        <section class="product-details-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
		                <div class="products-details-image">
		                    <ul class="products-details-image-slides owl-theme owl-carousel" data-slider-id="1">
		                         @foreach(json_decode($product->image,true) as $file)
			                     	<li><img src="{{ asset('product/'.$file) }}" alt="image"></li>
			                 	 @endforeach
		                 	</ul>

		                    <!-- Carousel Thumbs -->
		                    <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">               
		 						@foreach(json_decode($product->image,true) as $file)                             	 
		                        <div class="owl-thumb-item">
			                        <li><img src="{{ asset('product/'.$file) }}" alt="image"></li>
		                        </div>
								@endforeach 
		                    </div>
		                </div>
		            </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="products-details-desc">
                        	<form method="post" action="{{ url('/commander_product_qte/'.$product->id) }}">
                        		@csrf
                            <h3>{{ $product->titre }} </h3>

                            <div class="price">
                                <span class="new-price"><h4>{{ $product->prix_vente }}.00 dhs</h4></span>
                            </div>

                            <div class="products-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div> 
                            </div>

                            <ul class="products-info">                                
                                <li><span>Type:</span> <a href="#">{{ $product->type }}</a></li>
                                <li><span>Disponibilité:</span> <a href="#">En stock </a></li>
                            </ul>

                            <div class="products-color-switch">
                                <span>Coleur:</span>
                                <ul>
                                    <li><a href="#" title="Black" class="color-black"></a></li> 
                                </ul>
                            </div>

                            <div class="products-info-btn">
                                <a href="#"><i class='bx bxs-truck' ></i> Livraison 30 Dhs hors casablanca </a> 
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="1" name="qte">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div> 
                            </div> 

                            <div class="buy-checkbox-btn"> 
	                                <div class="item">
	                                    <button type="submit" class="default-btn">Commender maintenant !</button>
	                                </div>
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="products-details-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description">Description</a></li> 
                            </ul>
        
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <p>{{ $product->description }}</p>                                
                                </div> 
                            </div>

                        </div>
                    </div>

                </div>
            </div>

</section>
<!-- End Product Details Area -->

 
@endsection 