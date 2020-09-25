@extends('layout.master') 

@section('content')
@include('layout.service')
	  
<!-- Start Products Area -->
    <section class="products-area pb-40">
        <div class="container">
            <div class="section-title">
                <h2>Catalogue</h2>
            </div>

            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-products-box">
                        <div class="image">
                            <a href="#" class="d-block">
                            	<img src="{{ url('/product').'/'.json_decode($product->image,true)[0] }}" alt="image">
                            </a>

                            @if(isset($product->prix_promotion))
                            	<div class="sale">Sale</div>
    						@endif

                            <div class="buttons-list">
                                <ul>
                                    <li>
                                        <div class="cart-btn">
                                            <a href="{{ url('/commander/product/'.$product->id )}}">
                                                <i class='bx bxs-cart-add'></i>
                                                <span class="tooltip-label">Commander</span>
                                            </a>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="{{ url('/product/'.$product->id)}}">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Voir</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="content">
                            <h3><a href="#">{{ $product->titre }}</a></h3>
                            <div class="price">
                                <span class="old-price">{{ isset($product->prix_vente)?$product->prix_vente.'dhs' :'' }}  </span>
                                <span class="new-price">{{ isset($product->prix_promotion)?$product->prix_promotion.'dhs':'' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Products Area -->

 
@endsection