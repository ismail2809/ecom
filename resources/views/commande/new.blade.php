@extends('layout.master') 

@section('content')

@include('layout.service')

 <!-- Start Checkout Area -->
	<section class="checkout-area ptb-70">
        <div class="container"> 

            <form method="post" action="{{ url('commande_store') }}">
            @csrf
            <input type="hidden" class="form-control" name="produit_id" value="{{ $product->id }}">
            <input type="hidden" class="form-control" name="prix" value="{{ $product->prix_vente }}">

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">détail commande</h3>

                            <div class="row"> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label> Nom Complet <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                                    </div>
                                </div> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Téléphone <span class="required">*</span></label>
                                        <input type="number" class="form-control" name="telephone" placeholder="Téléphone">
                                    </div>
                                </div> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Adresse <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Ville <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="ville" placeholder="Ville">
                                    </div> 
                                </div> 

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Votre commande</h3>

                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Produit </th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="product-name">
                                                <a href="#">{{ $product->titre }}</a>
                                            </td>

                                            <td class="product-total">
                                                <span class="subtotal-amount">{{ $product->prix_vente }}.00 Dhs</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-name">
                                                <a href="#">Quantité </a>
                                            </td>

                                            <td class="product-total">
                                                <span class="subtotal-amount">{{ $qte }}</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="total-price">
                                                <span>Total commande (TTC)</span>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">{{ $qte * $product->prix_vente }}.00 Dhs</span>
                                            </td>
                                        </tr>
 
                                        <tr>
                                            <td class="order-name">
                                                <span>Livraison</span> <span  class="product-total">(hors casablanca)</span>
                                            </td>

                                            <td class="shipping-price">
                                                <span>30.00 Dhs</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" checked>
                                        <label for="direct-bank-transfer">Payement à la livraison</label>
                                         Livraison gratuite sur Casablanca 
                                    </p> 
                                </div>
                                <button class="default-btn"><i class="flaticon-tick"></i>Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
	<!-- End Checkout Area -->

@endsection