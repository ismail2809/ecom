@extends('layout.master') 
@section('content')
 
 <!-- Start Checkout Area -->
	<section class="checkout-area ptb-70">
        <div class="container"> 

            <form method="post" action="{{ url('product_store') }}" enctype="multipart/form-data">
            @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="billing-details">
                            <h3 class="title">ajouter produit</h3>

                            <div class="row"> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label> Titre <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="titre" placeholder="Titre" required="true">
                                    </div>
                                </div> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label> Type <span class="required">*</span></label>
                                        <input type="text" class="form-control" name="type" placeholder="Type produit" required="true">
                                    </div>
                                </div> 

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Prix achat <span class="required">*</span></label>
                                        <input type="number" class="form-control" name="prix_achat" placeholder="Prix achat"  required="true">
                                    </div>
                                </div>  

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Prix vente <span class="required">*</span></label>
                                        <input type="number" class="form-control" name="prix_vente" placeholder="Prix vente" required="true">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Prix promotion </label>
                                        <input type="number" class="form-control" name="prix_promotion" placeholder="Prix promotion">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>File <span class="required">*</span></label>
                                        <input type="file" class="form-control" name="image[]" placeholder="File" required="true" multiple>
                                    </div> 
                                </div>   

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Description </label>
                                        <textarea name="description" cols="30" rows="5" placeholder="Description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-10">
								</div>

								<div class="col-lg-2">                                	
                                    <div class="form-group"> 
                                        <input type="submit" class="btn btn-info" value="Enregistrer">
                                    </div> 
                                </div> 

                            </div>
                        </div>
                    </div> 

                </div>
            </form>
        </div>
    </section>
	<!-- End Checkout Area -->

@endsection	